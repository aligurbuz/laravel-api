<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support\Events\Crypt;

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
        //
    }
}
