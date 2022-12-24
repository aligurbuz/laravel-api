<?php

namespace App\Facades\Authenticate;

use App\Repositories\Repository;
use Illuminate\Support\Facades\Auth;

class Guard
{
    /**
     * @var string
     */
    protected static string $prefix = 'login';

    /**
     * get authenticate guard for facade
     *
     * @return object
     */
    public static function get(): object
    {
        // Note the authGuard helper method here.
        // this value can be obtained literally with the config/auth.php settings.
        // Every client that makes a request to the API comes with an apiKey key.
        // so this key is very important to authenticate.
        // @see App\Http\Controllers\Api\ApiController@getMiddlewares()
        return Auth::guard(authGuard(static::$prefix));
    }

    /**
     * set prefix for guard facade
     *
     * @param string $prefix
     * @return void
     */
    public static function prefix(string $prefix): void
    {
        static::$prefix = $prefix;
    }

    /**
     * get auth guard model name
     *
     * @return string
     */
    public static function model(): string
    {
        return lcfirst(
            class_basename(config('auth.providers.' . ApiKey::who() . '.model'))
        );
    }

    /**
     * get model code for guard facade
     *
     * @return string
     */
    public static function code(): string
    {
        return static::repository()->getModelCode();
    }

    /**
     * get repository object authenticate
     *
     * @return object
     */
    public static function repository(): object
    {
        $model = static::model();

        return Repository::$model();
    }
}
