<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Password\Events\Changes;

use App\Exceptions\Exception;
use App\Facades\Database\Authenticate\User;

trait BeforeUpdate
{
    /**
     * event performed before repository update
     *
     * @param array $clientData
     * @param array $oldData
     * @return void
     */
    public function eventFireBeforeUpdate(array $clientData = [], array $oldData = []): void
    {
        $passwordChange = $this->getMirror('passwordChange');

        // If the user wants to change her password, we want her to do so within the specified time.
        // If the timeout has expired, the password reset is not accepted and the system throws an exception.
        Exception::ifTrue($this->isExpire($passwordChange['client_time']), 'password_reset_expire');

        // We ask the user for an email for security purposes. It is checked for recorded data.
        // If the email data is not compatible, the system will throw an exception.
        Exception::ifTrue($passwordChange['hash'] !== $clientData['hash'], 'invalid_hash');

        // Represents the client data used within the Api application.
        // This data can be retrieved or processed as part of application functionality.
        if (config('app.passwordExpire') === true) {
            User::setContainer($clientData['email']);
            User::password()->validPassword($this->originalPassword());
        }
    }
}
