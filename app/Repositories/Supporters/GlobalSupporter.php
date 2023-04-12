<?php

namespace App\Repositories\Supporters;

use App\Repositories\Resources\User\UserRepository;

abstract class GlobalSupporter
{
    /**
     * get accessible for repository
     *
     * @return bool
     */
    protected function isAvailableAccessible(): bool
    {
        /** @see UserRepository::accessible() */
        return method_exists($this->eloquentRepository, 'accessible') && $this->eloquentRepository->accessible();
    }
}
