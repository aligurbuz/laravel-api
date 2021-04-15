<?php

namespace App\Facades\Authenticate;

use App\Services\AppContainer;

/**
 * Class ApiKey
 * @method static isWeb()
 * @package App\Facades\Authenticate
 */
class ApiKey
{
    /**
     * @param string $name
     * @param array $arguments
     * @return bool
     */
    public static function __callStatic(string $name, array $arguments) : bool
    {
        $name = strtolower(substr($name,2));

        return (static::who() === $name);
    }

    /**
     * get client according to apikey
     *
     * @param null $header
     * @return bool|int|string
     */
    public static function who($header = null): bool|int|string
    {
        $header = $header ?? static::get();
        $containerApiKeys = AppContainer::get('apiKeys');

        return array_search($header,is_array($containerApiKeys) ? $containerApiKeys : []);
    }

    /**
     * get header client api key
     *
     * @return string|null
     */
    public static function get(): ?string
    {
        return request()->headers->get(config('app.apikeyString'));
    }
}
