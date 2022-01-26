<?php

declare(strict_types=1);

namespace App\Services\Response;

use Exception;
use Throwable;
use App\Constants;
use App\Services\AppContainer;
use App\Facades\Authenticate\ApiKey;

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
    protected static array $validCodes = [200,201,400,401,403,500];

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
            'responseCode'      => static::responseCode(),
            'resource'          => static::getResourceData($data),
            'instructions'      => AppContainer::get(Constants::responseFormatterSupplement),
        ];

        if(isProduction()){
            unset($standard['instructions']);
        }

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
        $integerCode    = ($code == '0' || !is_numeric($code)) ? 500 : $code;
        $code           = (in_array($integerCode,static::$validCodes,true)) ? $integerCode : 500;
        $trace          = (isThrowableInstance($exception)) ? $exception : debug_backtrace();
        $classBaseName  = class_basename($trace);

        if($classBaseName=='NotFoundHttpException'){
            $code = 404;
        }

        $standard = [
            'status'        => false,
            'code'          => $code,
            'client'        => ApiKey::who(),
            'env'           => config('app.env'),
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
}
