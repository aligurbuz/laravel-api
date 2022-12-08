<?php

namespace App\Exceptions;

use App\Constants;
use App\Services\AppContainer;

/**
 * Class Exception
 * @method static customException($message = null, $keys = [], bool|string $notify = true)
 * @method static validationException($message = null, $keys = [], bool|string $notify = true)
 * @method static loginException($message = null, $keys = [], bool|string $notify = true)
 * @method static authenticateException($message = null, $keys = [], bool|string $notify = true)
 * @method static updateException($message = null, $keys = [], bool|string $notify = true)
 * @method static apiKeyException($message = null, $keys = [], bool|string $notify = true)
 * @method static accessLoggerException($message = null, $keys = [], bool|string $notify = true)
 * @method static clientFormatException($message = null, $keys = [], bool|string $notify = true)
 * @method static clientEmptyException($message = null, $keys = [], bool|string $notify = true)
 * @method static clientArrayLimiterException($message = null, $keys = [], bool|string $notify = true)
 * @method static clientCapsuleException($message = null, $keys = [], bool|string $notify = true)
 * @method static contentTypeException($message = null, $keys = [], bool|string $notify = true)
 * @method static logoutException($message = null, $keys = [], bool|string $notify = true)
 * @method static filterException($message = null, $keys = [], bool|string $notify = true)
 * @method static modelCreateException($message = null, $keys = [], bool|string $notify = true)
 * @method static modelUniqueCreateException($message = null, $keys = [], bool|string $notify = true)
 * @method static grandAuthenticateException($message = null, $keys = [], bool|string $notify = true)
 * @method static rangeException($message = null, $keys = [], bool|string $notify = true)
 * @method static selectException($message = null, $keys = [], bool|string $notify = true)
 * @method static withException($message = null, $keys = [], bool|string $notify = true)
 * @method static withSelectException($message = null, $keys = [], bool|string $notify = true)
 * @method static cacheException($message = null, $keys = [], bool|string $notify = true)
 * @method static permissionException($message = null, $keys = [], bool|string $notify = true)
 * @method static clientActionException($message = null, $keys = [], bool|string $notify = true)
 * @method static notFoundException($message = null, $keys = [], bool|string $notify = true)
 * @package App\Exceptions
 */
class Exception
{
    /**
     * throws custom exception for statement defined as static
     *
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        $namespace = 'App\Exceptions\\Custom\\' . ucfirst($name);

        // this container data is used in the script running on the access_logger middleware layer.
        // this data saved in the trace field in the access_logger table gives the debugBackTrace data in the exception system.
        static::setKeyForContainer('debugBackTrace', debug_backtrace());

        // if the application throws an exception,
        // if the developer sends true as the 3rd parameter of the exception,
        // the notification will be thrown with the exception.(etc..slack)
        AppContainer::set(Constants::exceptionNotify, $arguments[2] ?? null);

        if (isset($arguments[1]['errorInput'])) {
            AppContainer::setWithTerminating('errorInput', $arguments[1]['errorInput']);
        }

        if (isset($arguments[0])) {
            static::setKeyForContainer($namespace, ($arguments[1] ?? (is_array($arguments[0]) ? $arguments[0] : [])));
            throw new $namespace((is_array($arguments[0]) ? '' : $arguments[0]));
        }

        throw new $namespace();
    }

    /**
     * set key for container
     *
     * @param $exceptionName
     * @param mixed $data
     */
    private static function setKeyForContainer($exceptionName, mixed $data): void
    {
        AppContainer::set($exceptionName, is_string($data) ? ['key' => $data] : $data, true);
    }

    /**
     * @param bool $condition
     * @param $exceptionKey
     * @return void
     */
    public static function ifTrue(bool $condition,$exceptionKey): void
    {
        if($condition){
            static::customException($exceptionKey);
        }
    }
}
