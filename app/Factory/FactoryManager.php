<?php

namespace App\Factory;

use Exception;

abstract class FactoryManager
{
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
        $factory = 'App\Factory\\'.$name.'\\'.static::getAdapterName($name);

        if(class_exists($factory)){
            return (new $factory(($arguments[0] ?? null)));
        }

        return throw new Exception('factory is not valid');
    }

    /**
     * get adapter name for factory model
     *
     * @param string $name
     * @return string
     */
    private static function getAdapterName(string $name) : string
    {
        return (isset(static::$adapters[$name])) ? static::$adapters[$name] : $name;
    }
}
