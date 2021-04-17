<?php

namespace App\Exceptions;

use App\Services\AppContainer;

/**
 * Class Exception
 * @method static customException($message = null)
 * @method static validationException($message = null)
 * @method static loginException($message = null)
 * @method static authenticateException($message = null)
 * @method static updateException($message = null)
 * @method static apiKeyException($message = null)
 * @method static accessLoggerException($message = null)
 * @method static clientFormatException($message = null)
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
            throw new $namespace($arguments[0]);
        }
        else{
            AppContainer::set('debugBackTrace',debug_backtrace());
            throw new $namespace();
        }
    }
}
