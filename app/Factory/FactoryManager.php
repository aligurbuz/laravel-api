<?php

declare(strict_types=1);

namespace App\Factory;

use Exception;

class FactoryManager
{
    /**
     * @var array
     */
    protected static array $binds = [];

    /**
     * @var string
     */
    protected static string $name;

    /**
     * @var array
     */
    protected static array $arguments = [];

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
        static::parametersHandler($name,$arguments);

        return static::setAdapterName(function(){
            return (new static)->factoryMaker();
        });
    }

    /**
     * It loads the factory magic method parameters to the properties.
     *
     * @param string $name
     * @param array $arguments
     */
    private static function parametersHandler(string $name,array $arguments = []) : void
    {
        $arguments     = $arguments[0] ?? [];
        static::$name  = ucfirst($name);

        static::$arguments = isset(static::$binds[$name]) ? array_merge($arguments,static::$binds[$name]) : $arguments;
    }

    /**
     * Binds to the constructor method of factory classes.
     *
     * @param string $name
     * @param array $bind
     * @return void
     */
    public static function bind(string $name,array $bind = []) : void
    {
        static::$binds[$name] = $bind;
    }

    /**
     * get call static for factory
     *
     * @return mixed
     *
     * @throws Exception
     */
    private function factoryMaker(): mixed
    {
        $name = static::$name;
        $factory = 'App\Factory\\'.$name.'\\'.static::getAdapterName($name);

        if(class_exists($factory)){
            return new $factory(static::$arguments);
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
     * @param null|callable $callback
     * @return mixed
     */
    private static function setAdapterName(callable $callback = null) : mixed
    {
        if(isset(static::$adapters[static::$name],static::$arguments['adapter'])){
            static::$adapters[static::$name] = static::$arguments['adapter'];
        }

        return call_user_func($callback);
    }
}
