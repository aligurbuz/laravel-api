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
        User::withEmail($clientData['email'], false);
    }
}
