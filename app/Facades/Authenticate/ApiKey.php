<?php

namespace App\Facades\Authenticate;

use App\Services\AppContainer;
use Illuminate\Support\Str;

/**
 * Class ApiKey
 * @method static isWeb()
 * @method static isAdmin()
 * @method static isSuperAdmin()
 * @method static isIos()
 * @method static isAndroid()
 * @package App\Facades\Authenticate
 */
class ApiKey
{
    /**
     * @param string $name
     * @param array $arguments
     * @return bool
     */
    public static function __callStatic(string $name, array $arguments): bool
    {
        $name = Str::camel(substr($name, 2));

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

        return array_search($header, (is_array($containerApiKeys) ? $containerApiKeys : []));
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

    /**
     * get keys for apiKeys
     *
     * @return array
     */
    public static function keys(): array
    {
        return array_keys(AppContainer::get('apiKeys'));
    }
}
