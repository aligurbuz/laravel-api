<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Events\Password;

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
        //
    }
}
