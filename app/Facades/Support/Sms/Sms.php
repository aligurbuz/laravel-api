<?php

namespace App\Facades\Support\Sms;

/**
 * @method static $this to(string $to)
 * @method $this message(string $message)
 * @method void send()
 */
class Sms extends SmsManager
{
    /**
     * When a request is made to the password/changes endpoint,
     * it sends an SMS to the user's phone with a use code.
     *
     * @param string $userPhone
     * @param string $hash
     * @return void
     */
    public static function passwordChange(string $userPhone, string $hash): void
    {
        static::to($userPhone)->message('Password Reset Code: ' . $hash)->send();
    }

    /**
     * if there is activation at the user login;
     * If the value is sms this will work. see Facades/Authenticate/Activation class
     *
     * @param string $phone
     * @param string $hash
     * @return void
     */
    public static function userActivation(string $phone, string $hash): void
    {
        static::to($phone)->message('User activation code:' . $hash)->send();
    }
}
