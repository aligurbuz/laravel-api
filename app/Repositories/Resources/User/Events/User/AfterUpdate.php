<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Events\User;

use App\Repositories\Repository;

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
        if (isset($clientData['password'])) {
            Repository::userPassword()->create(array_merge(
                cR('user.password.create', ['password' => $this->originalPassword()]),
                ['user_code' => $result['user_code']]
            ));
        }
    }
}
