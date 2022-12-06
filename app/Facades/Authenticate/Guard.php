<?php

namespace App\Facades\Authenticate;

use App\Repositories\Repository;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Auth;

class Guard
{
    /**
     * get authenticate guard for facade
     *
     * @return Guard|StatefulGuard
     */
    public static function get() : Guard|StatefulGuard
    {
        // Note the authGuard helper method here.
        // this value can be obtained literally with the config/auth.php settings.
        // Every client that makes a request to the API comes with an apiKey key.
        // so this key is very important to authenticate.
        // @see App\Http\Controllers\Api\ApiController@getMiddlewares()
        return Auth::guard(authGuard());
    }

    /**
     * get auth guard model name
     *
     * @return string
     */
    public static function model() : string
    {
        return lcfirst(
            class_basename(config('auth.providers.'.ApiKey::who().'.model'))
        );
    }

    /**
     * get repository object authenticate
     *
     * @param bool $instance
     * @return object
     */
    public static function repository(bool $instance = true) : object
    {
        $model = static::model();

        return Repository::$model()->instance($instance);
    }
}
