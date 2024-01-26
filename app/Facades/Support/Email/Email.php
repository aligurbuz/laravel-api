<?php

namespace App\Facades\Support\Email;

use App\Facades\FacadeManager;
use App\Mail\TestEmail;
use App\Mail\UserActivation;
use Illuminate\Support\Facades\Mail;

class Email extends FacadeManager
{
    public static function test(array $data = []): void
    {
        Mail::to($data['to'])->send(new TestEmail($data));
    }

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
     * @param string $email
     * @param string $hash
     * @return void
     */
    public static function passwordReset(string $email, string $hash): void
    {
        //
    }
}
