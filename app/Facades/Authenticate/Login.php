<?php

namespace App\Facades\Authenticate;

use App\Exceptions\Exception;
use App\Exceptions\Exception as ExceptionService;
use App\Facades\Authenticate\User as UserFacade;

class Login
{
    /**
     * the login request for facade
     *
     * @param string|null $email
     * @param string|null $password
     * @return array
     */
    public static function make(?string $email = null, ?string $password = null): array
    {
        return static::attempt($email, $password, static function (object $user) {

            // this code looks at the user's status and is_deleted fields.
            // It will throw an exception if the status field value is 0 or the is_deleted field is 1.
            UserFacade::isActive();

            // if the user validates with the two-factor system,
            // we check it here with the makeActivation method.
            // two-factory system : sms or email checking
            return static::twoFactor($user, callback: static function () {
                return Authenticate::createToken();
            });
        });
    }

    /**
     * this method will provide laravel login directly.
     * If you don't want to make MakeActivation, you can use this method directly.
     *
     * @param string|null $email
     * @param string|null $password
     * @param callable $callback
     * @return mixed
     */
    public static function attempt(?string $email, ?string $password, callable $callback): mixed
    {
        // Note the authGuard helper method here.
        // this value can be obtained literally with the config/auth.php settings.
        // Every client that makes a request to the API comes with an apiKey key.
        // so this key is very important to authenticate.
        // @see App\Http\Controllers\Api\ApiController@getMiddlewares()
        $authGuard = Authenticate::guard();

        if ($authGuard->attempt(static::attemptCredentials($email, $password))) {
            return $callback($authGuard->user());
        }

        // if the system cannot authenticate the user,
        // it will throw an exception directly.
        return ExceptionService::loginException();
    }

    /**
     * @param object $user
     * @param callable $callback
     * @return array
     */
    private static function twoFactor(object $user, callable $callback): array
    {
        $activationData = Activation::get(Authenticate::code());

        if (isset($activationData['options']) && $activationData['options'] !== 'None') {
            $activationHandle = Activation::handle($activationData, (array)$user->toArray());
            if (count($activationHandle)) {
                return $activationHandle;
            }
        }

        return $callback();
    }

    /**
     * get attempt credentials for facade
     *
     * @param string|null $email
     * @param string|null $password
     * @return array
     */
    private static function attemptCredentials(?string $email = null, ?string $password = null): array
    {
        $clientData = client();

        if (isset($clientData['username'])) {
            return [
                'username' => $clientData['username'],
                'password' => $password ?? $clientData['password']
            ];
        }

        return [
            'email' => $email ?? $clientData['email'],
            'password' => $password ?? $clientData['password']
        ];
    }
}
