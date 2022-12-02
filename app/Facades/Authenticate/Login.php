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
    public static function withTwoFactor(?string $email = null, ?string $password = null): array
    {
        return Authenticate::attempt($email, $password, static function () {

            // if the user validates with the two-factor system,
            // we check it here with the makeActivation method.
            // two-factory system : sms or email checking
            return Activation::twoFactor(callback: static function () {
                return Authenticate::createToken();
            });
        });
    }

    /**
     * the direct login request without two-factor for facade
     *
     * @param string|null $email
     * @param string|null $password
     * @return array
     */
    public static function attempt(?string $email = null, ?string $password = null): array
    {
        // this method overrides the two-authentication system.
        return Authenticate::attempt($email, $password);
    }
}
