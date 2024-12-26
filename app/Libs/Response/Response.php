<?php

declare(strict_types=1);

namespace App\Libs\Response;

use App\Constants;
use App\Facades\Database\Authenticate\ApiKey;
use App\Facades\Database\Role\Role;
use App\Libs\AppContainer;
use Exception;
use Throwable;

/**
 * Class Response
 * @package App\Services
 */
class Response extends ResponseSupport
{
    /**
     * get http status codes
     *
     * @var array
     */
    protected static array $httpStatusCodes = [];

    /**
     * @var array|int[]
     */
    protected static array $validCodes = [200, 201, 204, 400, 401, 403, 500, 404];

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
    public static function ok(mixed $data, int $code = 200, bool $isAvailableData = true): object
    {
        $resource = static::getResourceData($data);

        $standard = [
            'status' => true,
            'code' => $code = static::getHttpSuccessCode($code),
            'cache' => (isset($data['cache'])),
            'isAvailableData' => $isAvailableData,
            'client' => ApiKey::who(),
            'env' => config('app.env'),
            'count' => $resource['0']['total'] ?? count(($resource[0]['data'] ?? 0)),
            'responseCode' => static::responseCode(),
            'resource' => $resource,
            'instructions' => AppContainer::get(Constants::responseFormatterSupplement)
        ];

        if (isAuthenticate() && ApiKey::isAdmin() && AppContainer::get('worksPermission') === true) {
            $standard['permission'] = Role::permission(endpoint())->get();
        }

        return static::response($standard, $code);
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
    public static function error(string $message = null, int $code = 400, Throwable $exception = null): object
    {
        $integerCode = ($code == '0' || !is_numeric($code)) ? 500 : $code;
        $code = (in_array($integerCode, static::$validCodes, true)) ? $integerCode : 500;
        $trace = (isThrowableInstance($exception)) ? $exception : debug_backtrace();
        $classBaseName = class_basename($trace);

        if ($classBaseName === 'NotFoundHttpException') {
            $code = 404;
        }

        $standard = [
            'status' => false,
            'code' => $code,
            'client' => ApiKey::who(),
            'env' => config('app.env'),
            'responseCode' => static::responseCode(),
            'errorInput' => static::errorInput(),
            'exception' => $classBaseName,
            'errorMessage' => static::getExceptionMessageForEnvironment($message, $code),
            'endpoint' => request()->url(),
            'rules' => [static::rules()],
        ];

        return static::response(
            array_merge($standard, static::throwIn($trace, $code, $message)),
            $code
        );
    }
}
