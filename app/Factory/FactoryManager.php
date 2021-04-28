<?php

namespace App\Factory;

use JetBrains\PhpStorm\Pure;

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
        $factory = 'App\Factory\\'.ucfirst($name).'\\'.static::getAdapterName($name);

        if(class_exists($factory)){
            return (new $factory(($arguments[0] ?? null)));
        }

        return throw new Exception('factory is not valid');
    }

    /**
     * get adapter name for factory model
     *
     * @param $name
     * @return string
     */
    #[Pure] private static function getAdapterName(string $name) : string
    {
        $name = ucfirst($name);
        return (isset(static::$adapters[$name])) ? ucfirst(static::$adapters[$name]) : $name;
    }
}
