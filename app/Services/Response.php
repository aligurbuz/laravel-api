<?php

declare(strict_types=1);

namespace App\Services;

use Exception;
use Throwable;
use App\Constants;
use JetBrains\PhpStorm\ArrayShape;
use App\Facades\Authenticate\ApiKey;

/**
 * Class Response
 * @package App\Services
 */
class Response
{
    /**
     * get http status codes
     *
     * @var array
     */
    protected static array $httpStatusCodes = ['POST' => 201];

    /**
     * application success 200 content for response
     *
     * @param bool $data
     * @param int $code
     * @param bool $isAvailableData
     * @return object
     *
     * @throws Exception
     */
    public static function ok(mixed $data, int $code = 200,bool $isAvailableData = true) : object
    {
        $standard = [
            'status'            => true,
            'code'              => $code = static::getHttpSuccessCode($code),
            'cache'             => (isset($data['cache'])),
            'isAvailableData'   => $isAvailableData,
            'client'            => ApiKey::who(),
            'env'               => config('app.env'),
            'responseTime'      => Date::now(),
            'responseCode'      => static::responseCode(),
            'resource'          => isset($data[0]) ? $data : [$data],
            'instructions'      => AppContainer::get(Constants::responseFormatterSupplement),
        ];

        return static::response($standard,$code);
    }

    /**
     * application error 400 content for response
     *
     * @param string|null $message
     * @param int $code
     * @param Throwable|null $exception
     * @return object
     *
     * @throws Exception
     */
    public static function error(string $message = null, int $code = 400, Throwable $exception = null) : object
    {
        $code  = ($code == '0' || !is_numeric($code)) ? 500 : $code;
        $trace = (isThrowableInstance($exception)) ? $exception : debug_backtrace();
        $classBaseName = class_basename($trace);

        if($classBaseName=='NotFoundHttpException'){
            $code = 404;
        }

        $standard = [
            'status'        => false,
            'code'          => $code,
            'client'        => ApiKey::who(),
            'env'           => config('app.env'),
            'responseTime'  => Date::now(),
            'responseCode'  => static::responseCode(),
            'errorInput'    => static::errorInput(),
            'exception'     => $classBaseName,
            'errorMessage'  => static::getExceptionMessageForEnvironment($message,$code),
            'endpoint'      => request()->url(),
            'rules'         => [static::rules()],
        ];

        return static::response(
            array_merge($standard,static::throwIn($trace,$code,$message)),
            $code
        );
    }

    /**
     * @param array $data
     * @param int $code
     * @return object
     *
     * @throws Exception
     */
    private static function response(array $data = [], int $code = 200) : object
    {
        return static::formatter($data,$code);
    }

    /**
     * includes the needed extra information to exception data
     *
     * @param null $trace
     * @param int $code
     * @param null $message
     * @return array
     */
    private static function throwIn($trace = null, int $code = 200, $message = null) : array
    {
        $throwInProcess = static::throwInProcess($trace);

        if($code==500){
            AppContainer::set('500messageForLog',$message ?? '');
            AppContainer::set('500fileForLog',$throwInProcess['file'] ?? '');
            AppContainer::set('500lineForLog',$throwInProcess['line'] ?? '');
        }

        if(app()->environment() == 'local'){
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
    private static function throwInProcess($trace = null): array
    {
        if($trace instanceof Throwable){
            if(AppContainer::get('debugBackTrace')){
                $file = $trace->getTrace()[0]['file'] ?? '';
                $line = $trace->getTrace()[0]['line'] ?? '';
            }

            return array_merge_recursive([
                'file'    => $file ?? $trace->getFile(),
                'line'    => $line ?? $trace->getLine()
            ],static::getExtraStaticExceptionSupplement());
        }

        return array_merge_recursive([
            'file'    => ($trace[0]['file'] ?? null),
            'line'    => ($trace[0]['line'] ?? null)
        ],static::getExtraStaticExceptionSupplement());
    }

    /**
     * get exception message for response data
     *
     * @param null $message
     * @param int $code
     * @return string
     */
    private static function getExceptionMessageForEnvironment($message = null, int $code = 200) : string
    {
        return (app()->environment() == 'local' || $code!==500)
            ? (($code === 404) ? 'Not Found Endpoint' : $message)
            : trans('exception.500error');
    }

    /**
     * masks special keys for request data
     *
     * @return array
     */
    private static function getRequest() : array
    {
        $request = request()->request->all();

        if(isset($request['password'])){
            $request['password'] = '***';
        }

        if(isset($request['credit_card_number'])){
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
    private static function getExtraStaticExceptionSupplement() : array
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
    private static function getHttpSuccessCode(int $code = 200): mixed
    {
        $method = request()->method();

        if(isset(static::$httpStatusCodes[$method])){
            return static::$httpStatusCodes[$method];
        }

        return $code;
    }

    /**
     * get response code
     *
     * @return int
     */
    private static function responseCode() : int
    {
        return crc32(Client::fingerPrint().'_'.time());
    }

    /**
     * get error input for exception
     *
     * @return ?string
     */
    private static function errorInput() : ?string
    {
        return AppContainer::get(Constants::errorInput);
    }

    /**
     * get error input for exception
     *
     * @return mixed
     */
    private static function rules() : mixed
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
    private static function formatter(array $data = [], int $code = 200): object
    {
        AppContainer::set(Constants::response,$data);

        return response()->json($data,$code);
    }
}
