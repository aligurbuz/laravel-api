<?php

declare(strict_types=1);

namespace App\Factory;

use Exception;

abstract class FactoryManager
{
    /**
     * @var array
     */
    protected static array $binds = [];

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
        $arguments = static::$binds[$name] ?? ($arguments[0] ?? []);

        return static::setAdapterName($name,$arguments,function() use($name,$arguments){
            return (new static)->factoryMaker($name,$arguments);
        });
    }

    /**
     * Binds to the constructor method of factory classes.
     *
     * @param string $name
     * @param null $bind
     * @return void
     */
    public static function bind(string $name,$bind = null) : void
    {
        static::$binds[$name] = $bind;
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
            return new $factory($arguments);
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
        if(isset(static::$adapters[$name],$arguments['adapter'])){
            static::$adapters[$name] = $arguments['adapter'];
        }

        return call_user_func($callback);
    }
}
