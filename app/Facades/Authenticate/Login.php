<?php

namespace App\Facades\Authenticate;

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
        return Authenticate::attempt($email, $password, static function (object $user) {

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
}
