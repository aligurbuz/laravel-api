<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Password\Events\Changes;

use App\Facades\Authenticate\User;

trait BeforeCreate
{
    /**
     * event performed before repository create
     *
     * @param array $clientData
     * @return void
     */
    public function eventFireBeforeCreate(array $clientData = []): void
    {
        // before the repository function works,
        // we must check whether the incoming email value is valid for the user.
        // The withEmail method changes the container value.
        // so watch out for eventFireAfterCreate method.
        // here, the user facade class will be read with this container.
        User::setContainer($clientData['email'], false);
    }
}
