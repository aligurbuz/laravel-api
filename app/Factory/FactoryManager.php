<?php

declare(strict_types=1);

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

        return static::setAdapterName($name,$arguments,function() use($name,$arguments){
            return (new static)->factoryMaker($name,$arguments);
        });
    }

    /**
     * get call static for factory
     *
     * @param string $name
     * @param array $arguments
     * @return mixed
     *
     * @throws Exception
     */
    private function factoryMaker(string $name,array $arguments = []): mixed
    {
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

    /**
     * set adapter name for factory model
     *
     * @param string $name
     * @param array $arguments
     * @param null|callable $callback
     * @return mixed
     */
    private static function setAdapterName(string $name,array $arguments = [],callable $callback = null) : mixed
    {
        if(isset(static::$adapters[$name],$arguments[0]['adapter'])){
            static::$adapters[$name] = $arguments[0]['adapter'];
        }

        return call_user_func($callback);
    }
}
