<?php

namespace App\Factory;

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
        $adapters = (isset(static::$adapters[$name])) ? ucfirst(static::$adapters[$name]) : $name;
        $factory = 'App\Factory\\'.$name.'\\'.$adapters;

        if(class_exists($factory)){
            return (new $factory(($arguments[0] ?? null)));
        }

        return throw new Exception('factory is not valid');
    }
}
