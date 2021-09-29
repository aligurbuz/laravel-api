<?php

declare(strict_types=1);

namespace App\Services;

/**
 * Class AppContainer
 * @package App\Services
 */
class AppContainer
{
    /**
     * @var array
     */
    protected static array $data = [];

    /**
     * @var array
     */
    protected static array $values = [];

    /**
     * set key and value for app factory
     *
     * @param $key
     * @param $value
     * @param bool $merge
     */
    public static function set($key, $value, bool $merge = false)
    {
        if(!$merge && !isset(static::$data[$key])){
            static::$data[$key] = $value;
        }

        if(
            $merge
            && static::has($key)
            && is_array(static::get($key))
            && is_array($value)
            && !in_array(static::getValueHash($value),(static::$values[$key] ?? []))
        ){
            $mergeData                = array_merge_recursive(static::get($key),$value);
            static::$data[$key]       = $mergeData;
            static::$values[$key][]   = static::getValueHash($value);
        }

        if($merge && !static::has($key) && is_array($value)){
            static::$data[$key] = $value;
        }
    }

    /**
     * get value hash for appContainer instance
     *
     * @param array $value
     * @return int
     */
    public static function getValueHash(array $value = []) : int
    {
        return crc32(json_encode($value));
    }

    /**
     * get key for app factory
     *
     * @param $key
     * @param mixed|null $default
     * @return mixed
     */
    public static function get($key, mixed $default = null): mixed
    {
        return static::$data[$key] ?? $default;
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

    /**
     * it takes name after $name value would be checked
     *
     * @param string $name
     * @param callable $callback
     * @return mixed
     */
    public static function use(string $name,callable $callback) : mixed
    {
        if(!static::has($name)){
            static::set($name,call_user_func($callback));
        }

        return static::get($name);
    }
}
