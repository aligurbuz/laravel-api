<?php

namespace App\Exceptions;

use App\Services\AppContainer;

/**
 * Class Exception
 * @method static customException($message = null,$keys = [])
 * @method static validationException($message = null,$keys = [])
 * @method static loginException($message = null,$keys = [])
 * @method static authenticateException($message = null,$keys = [])
 * @method static updateException($message = null,$keys = [])
 * @method static apiKeyException($message = null,$keys = [])
 * @method static accessLoggerException($message = null,$keys = [])
 * @method static clientFormatException($message = null,$keys = [])
 * @method static clientArrayLimiterException($message = null,$keys = [])
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
        $namespace = 'App\Exceptions\\'.ucfirst($name);

        if(isset($arguments[0])){
            static::setKeyForContainer($namespace,($arguments[1] ?? []));
            throw new $namespace($arguments[0]);
        }
        else{
            AppContainer::set('debugBackTrace',debug_backtrace());
            throw new $namespace();
        }
    }

    /**
     * set key for container
     *
     * @param $exceptionName
     * @param array $data
     */
    private static function setKeyForContainer($exceptionName,array $data = []) : void
    {
        AppContainer::set($exceptionName,$data,true);
    }
}
