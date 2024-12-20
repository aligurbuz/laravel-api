<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Password\Events\Changes;

use App\Exceptions\Exception;
use App\Facades\Database\Authenticate\Guard;

trait AfterUpdate
{
    /**
     * event performed after repository update
     *
     * @param array $result
     * @param array $clientData
     * @return void
     */
    public function eventFireAfterUpdate(array $result = [], array $clientData = []): void
    {
        // After everything is completed, we change the user's password with email control.
        $userPasswordUpdate = Guard::repository()
            ->instance(false)
            ->where('email', $result['email'])
            ->update(['password' => $result['password']]);

        if ($userPasswordUpdate === 0) {
            Exception::customException('password_reset_fail', ['email' => $result['email']]);
        }
    }
}
