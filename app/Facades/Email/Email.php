<?php

namespace App\Facades\Email;

use App\Mail\UserActivation;
use App\Mail\VerifyEmailForUser;
use Illuminate\Support\Facades\Mail;

class Email
{
    /**
     * user activation email sending
     *
     * @param string $email
     * @param string $hash
     * @return void
     */
    public static function userActivation(string $email, string $hash): void
    {
        dispatch(Mail::to($email)->send(new UserActivation([
            'hash' => $hash
        ])));
    }

    /**
     * user activation email sending
     *
     * @param string $email
     * @param string $hash
     * @return void
     */
    public static function verifyingEmail(string $email, string $hash): void
    {
        /**dispatch(Mail::to($email)->send(new VerifyEmailForUser([
         * 'hash' => $hash
         * ])));**/
    }
}
