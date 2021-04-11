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
        $header = request()->headers->get(config('app.apikeyString'));

        $containerApiKeys = AppContainer::get('apiKeys');
        $key = array_search($header,is_array($containerApiKeys) ? $containerApiKeys : []);

        return ($key === $name);
    }
}
