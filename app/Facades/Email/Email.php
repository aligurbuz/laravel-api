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

    /**
     * When a request is made to the password/changes endpoint,
     * it sends an email to the user's email with a use code.
     *
     * @param string $email
     * @param string $hash
     * @return void
     */
    public static function passwordReset(string $email, string $hash): void
    {
        /**dispatch(Mail::to($email)->send(new VerifyEmailForUser([
         * 'hash' => $hash
         * ])));**/
    }
}
