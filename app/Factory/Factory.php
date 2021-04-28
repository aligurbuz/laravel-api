<?php

namespace App\Factory;

use Exception;
use App\Factory\Owner\Interfaces\OwnerInterface;

/**
 * Class Factory
 * @method static OwnerInterface owner($arguments = null)
 * @package App\Factory
 */
class Factory
{
    /**
     * get the called class for factory
     *
     * @var array
     */
    protected static array $adapters = [];

    /**
     * get call static for factory
     *
     * @param string $name
     * @param array $arguments
     * @return mixed
     *
     * @throws Exception
     */
    public static function __callStatic(string $name,array $arguments = []): mixed
    {
        $name = ucfirst($name);
        $adapters = (isset(static::$adapters[$name])) ? static::$adapters[$name] : $name;
        $factory = 'App\Factory\\'.$name.'\\'.$adapters;

        if(class_exists($factory)){
            return (new $factory(($arguments[0] ?? null)));
        }

        return throw new Exception('factory is not valid');
    }
}
