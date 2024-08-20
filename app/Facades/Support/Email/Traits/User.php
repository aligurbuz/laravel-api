<?php

namespace App\Facades\Support\Email\Traits;

use App\Mail\UserActivation;
use Illuminate\Support\Facades\Mail;

trait User
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
        Mail::to($email)->send(new UserActivation([
            'hash' => $hash
        ]));
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
        //
    }

    /**
     * When a request is made to the password/changes endpoint,
     * it sends an email to the user's email with a use code.
     *
     * @param array $data
     * @return void
     */
    public static function passwordReset(array $data = []): void
    {
        Mail::to($data['email'])->send(new UserActivation([
            'hash' => $data['hash']
        ]));
    }
}
