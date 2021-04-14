<?php

namespace App\Services;

class AppContainer
{
    /**
     * @var array
     */
    protected static array $data = [];

    /**
     * set key and value for app factory
     *
     * @param $key
     * @param $value
     * @param bool $merge
     */
    public static function set($key,$value,$merge = false)
    {
        if(!$merge && !isset(static::$data[$key])){
            static::$data[$key] = $value;
        }

        if($merge && static::has($key) && is_array(static::get($key)) && is_array($value)){
            $mergeData = array_merge_recursive(static::get($key),$value);
            static::$data[$key] = $mergeData;
        }

        if($merge && !static::has($key) && is_array($value)){
            static::$data[$key] = $value;
        }
    }

    /**
     * get key for app factory
     *
     * @param $key
     * @return mixed
     */
    public static function get($key): mixed
    {
        return static::$data[$key] ?? null;
    }

    /**
     * get all key for app factory
     *
     * @return array
     */
    public static function all(): array
    {
        return static::$data;
    }

    /**
     * get availability of the key for app factory
     *
     * @param $key
     * @return bool
     */
    public static function has($key): bool
    {
        return isset(static::$data[$key]);
    }

    /**
     * delete the key for app factory
     *
     * @param $key
     * @return void
     */
    public static function terminate($key): void
    {
        if(isset(static::$data[$key])){
            unset(static::$data[$key]);
        }
    }
}
