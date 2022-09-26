<?php

namespace App\Services;

class Macro
{
    /**
     * @var array
     */
    protected static array $macros = [];

    /**
     * @var string
     */
    protected string $string;

    /**
     * @param string $string
     */
    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return null
     */
    public function __call(string $name , array $arguments = [])
    {
        if(isset(self::$macros[$name]) && is_callable(self::$macros[$name])){
            /*** @var object $closure */
            $closure = self::$macros[$name];
            return $closure->call($this);
        }

        return null;
    }

    /**
     * @param string $method
     * @param callable $callback
     * @return void
     */
    public static function set(string $method, callable $callback) : void
    {
        static::$macros[$method] = $callback;
    }
}
