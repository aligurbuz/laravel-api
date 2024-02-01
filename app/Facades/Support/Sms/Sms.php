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
     * @param array $data
     * @return void
     */
    public static function passwordChange(array $data = []): void
    {
        static::to($data['phone'])->message('Password Reset Code: ' . $data['hash'])->send();
    }

    /**
     * if there is activation at the user login;
     * If the value is sms this will work. see Facades/Authenticate/Activation class
     *
     * @param array $data
     * @return void
     */
    public static function userActivation(array $data = []): void
    {
        static::to($data['phone'])->message('User activation code:' . $data['phone'])->send();
    }
}
