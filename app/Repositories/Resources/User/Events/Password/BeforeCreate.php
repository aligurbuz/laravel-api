<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Events\Password;

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
        $this
            ->where('user_code',$clientData['user_code'])
            ->where('status', 1)->update(['status' => 0]);
    }
}
