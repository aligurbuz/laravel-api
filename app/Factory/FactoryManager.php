<?php

declare(strict_types=1);

namespace App\Factory;

use Exception;

class FactoryManager extends FactoryResourceManager
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
     * @var string|null
     */
    protected static ?string $factory;


    /**
     * get call static for factory
     *
     * @param string $name
     * @param array $arguments
     * @return mixed
     *
     * @throws Exception
     */
    public static function __callStatic(string $name, array $arguments = []): mixed
    {
        static::bindings();
        static::parametersHandler($name, $arguments);

        return static::setAdapterName(function () {
            return (new static)->factoryMaker();
        });
    }

    /**
     * binds to classes as parameters.
     *
     * @return void
     */
    public static function bindings(): void
    {
        //
    }

    /**
     * It loads the factory magic method parameters to the properties.
     *
     * @param string $name
     * @param array $arguments
     */
    private static function parametersHandler(string $name, array $arguments = []): void
    {
        $arguments = $arguments[0] ?? [];
        $name = static::$name = ucfirst($name);

        static::$arguments = isset(static::$binds[$name]) ? array_merge($arguments, static::$binds[$name]) : $arguments;
    }

    /**
     * set adapter name for factory model
     *
     * @param null|callable $callback
     * @return mixed
     */
    private static function setAdapterName(callable $callback = null): mixed
    {
        if (isset(static::$adapters[static::$name], static::$arguments['adapter'])) {
            static::$adapters[static::$name] = static::$arguments['adapter'];
        }

        return call_user_func($callback);
    }

    /**
     * get call static for factory
     *
     * @return string
     *
     * @throws Exception
     */
    private function factoryMaker(): mixed
    {
        $name = static::$name;
        static::$factory = 'App\Factory\\' . $name . '\\' . ucfirst(static::getAdapterName($name));

        if (class_exists(static::$factory)) {
            return $this->callFactory();
        }

        return throw new Exception('factory named ' . $name . ' is not valid');
    }

    /**
     * get adapter name for factory model
     *
     * @param string $name
     * @return string
     */
    private static function getAdapterName(string $name): string
    {
        return (isset(static::$adapters[$name])) ? static::$adapters[$name] : $name;
    }

    /**
     * Binds to the constructor method of factory classes.
     *
     * @param string $name
     * @param array $bind
     * @return void
     */
    public static function bind(string $name, array $bind = []): void
    {
        static::$binds[$name] = $bind;
    }
}
