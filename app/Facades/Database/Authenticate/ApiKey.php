<?php

namespace App\Facades\Database\Authenticate;

use App\Facades\Support\Faker\Faker;
use App\Libs\AppContainer;
use App\Libs\HashGenerator;
use Exception;
use Illuminate\Support\Facades\DB;
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
        $header = $header ?? static::getHeader();
        $containerApiKeys = static::all();

        return array_search($header, $containerApiKeys, true);
    }

    /**
     * get header client api key
     *
     * @return string|null
     */
    public static function getHeader(): ?string
    {
        return AppContainer::get('apiKey');
    }

    /**
     * get db api keys
     *
     * @param string|null $key
     * @return mixed
     */
    public static function get(?string $key = null): mixed
    {
        $apiKeys = AppContainer::use('dbApiKeys', static function () {
            return DB::table('api_keys')->get();
        });

        if (!is_null($key)) {
            foreach ($apiKeys as $apiKey) {
                if ($apiKey->key === $key) {
                    return $apiKey;
                }
            }
        }

        return $apiKeys;
    }

    /**
     * get all keys for facade
     *
     * @return array
     */
    public static function all(): array
    {
        return AppContainer::get('apiKeys') ?? [];
    }

    /**
     * get keys for apiKeys
     *
     * @return array
     */
    public static function keys(): array
    {
        return array_keys(static::all());
    }

    /**
     * create new api key for application
     *
     * @throws Exception
     */
    public static function create(string $key): bool
    {
        return DB::table('api_keys')->insert([
            'key' => $key,
            'value' => (new HashGenerator())->encode($key . random_int(0, 100000) . '_' . Faker::stringFaker() . '_' . time())
        ]);
    }
}
