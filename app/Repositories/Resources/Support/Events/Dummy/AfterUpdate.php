<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support\Events\Dummy;

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
        //
    }
}
