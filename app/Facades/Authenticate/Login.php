<?php

namespace App\Facades\Authenticate;

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
