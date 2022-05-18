<?php

declare(strict_types=1);

namespace App\Services\Response;

use App\Constants;
use App\Services\AppContainer;
use App\Services\Client;
use Exception;
use JetBrains\PhpStorm\ArrayShape;
use Throwable;

/**
 * Class ResponseSupport
 * @package App\Services\Response
 */
abstract class ResponseSupport
{
    /**
     * @param array $data
     * @param int $code
     * @return object
     *
     * @throws Exception
     */
    protected static function response(array $data = [], int $code = 200): object
    {
        return static::formatter($data, $code);
    }

    /**
     * get resource data for response
     *
     * @param array $data
     * @return array
     */
    protected static function getResourceData(array $data = []): array
    {
        $resource = isset($data[0]) ? $data : [$data];
        return isset($resource[0]['data']) ? $resource : [['data' => $resource]];
    }

    /**
     * includes the needed extra information to exception data
     *
     * @param null $trace
     * @param int $code
     * @param null $message
     * @return array
     */
    protected static function throwIn($trace = null, int $code = 200, $message = null): array
    {
        $throwInProcess = static::throwInProcess($trace);

        if ($code == 500) {
            AppContainer::set('500messageForLog', $message ?? '');
            AppContainer::set('500fileForLog', $throwInProcess['file'] ?? '');
            AppContainer::set('500lineForLog', $throwInProcess['line'] ?? '');
        }

        if (app()->environment() == 'local') {
            return $throwInProcess;
        }

        return [];
    }

    /**
     * get throw in process
     *
     * @param null $trace
     * @return array
     */
    protected static function throwInProcess($trace = null): array
    {
        if ($trace instanceof Throwable) {
            if (AppContainer::get('debugBackTrace')) {
                $file = $trace->getTrace()[0]['file'] ?? '';
                $line = $trace->getTrace()[0]['line'] ?? '';
            }

            return array_merge_recursive([
                'file' => $file ?? $trace->getFile(),
                'line' => $line ?? $trace->getLine()
            ], static::getExtraStaticExceptionSupplement());
        }

        return array_merge_recursive([
            'file' => ($trace[0]['file'] ?? null),
            'line' => ($trace[0]['line'] ?? null)
        ], static::getExtraStaticExceptionSupplement());
    }

    /**
     * get exception message for response data
     *
     * @param null $message
     * @param int $code
     * @return string
     */
    protected static function getExceptionMessageForEnvironment($message = null, int $code = 200): string
    {
        return (app()->environment() == 'local' || $code !== 500)
            ? (($code === 404) ? 'Not Found Endpoint' : $message)
            : trans('exception.500error');
    }

    /**
     * masks special keys for request data
     *
     * @return array
     */
    protected static function getRequest(): array
    {
        $request = request()->request->all();

        if (isset($request['password'])) {
            $request['password'] = '***';
        }

        if (isset($request['credit_card_number'])) {
            $request['credit_card_number'] = '***';
        }

        return $request;
    }

    /**
     * get extra static exception supplement
     *
     * @return array
     */
    #[ArrayShape(['request' => "array", 'debugBackTrace' => "array|mixed"])]
    protected static function getExtraStaticExceptionSupplement(): array
    {
        return [
            'request' => [
                request()->method() => static::getRequest(),
                'queryParams' => request()->query->all()
            ],
            'debugBackTrace' => AppContainer::has(Constants::debugBackTrace)
                ? AppContainer::get(Constants::debugBackTrace)
                : debug_backtrace()
        ];
    }

    /**
     * get http success code
     *
     * @param int $code
     * @return mixed
     */
    protected static function getHttpSuccessCode(int $code = 200): mixed
    {
        $method = request()->method();

        if (isset(static::$httpStatusCodes[$method])) {
            return static::$httpStatusCodes[$method];
        }

        return $code;
    }

    /**
     * get response code
     *
     * @return int
     */
    protected static function responseCode(): int
    {
        return crc32(Client::fingerPrint() . '_' . time());
    }

    /**
     * get error input for exception
     *
     * @return ?string
     */
    protected static function errorInput(): ?string
    {
        return AppContainer::get(Constants::errorInput);
    }

    /**
     * get error input for exception
     *
     * @return mixed
     */
    protected static function rules(): mixed
    {
        return AppContainer::get(Constants::validatorRules);
    }

    /**
     * @param array $data
     * @param int $code
     * @return object
     *
     * @throws Exception
     */
    protected static function formatter(array $data = [], int $code = 200): object
    {
        AppContainer::set(Constants::response, $data);

        return response()->json($data, $code);
    }

    /**
     * set formatter supplement for response
     *
     * @param array $data
     * @param bool $merge
     * @return void
     */
    public static function formatterSupplement(array $data = [], bool $merge = false): void
    {
        if (isProduction() === false && request()->method() == 'GET') {
            AppContainer::set(Constants::responseFormatterSupplement, $data, $merge);
        }
    }
}
