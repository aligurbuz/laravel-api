<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Events\Profiles;

use Laravel\SerializableClosure\Exceptions\PhpVersionNotSupportedException;

trait AfterCreate
{
    /**
     * event performed after repository create
     *
     * @param array $result
     * @param array $clientData
     * @return void
     * @throws PhpVersionNotSupportedException
     */
    public function eventFireAfterCreate(array $result = [], array $clientData = []): void
    {
        $this->queue('name', static function () {
            //
        });
    }
}
