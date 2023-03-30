<?php

namespace App\Repositories\Supporters;

abstract class GlobalSupporter
{
    /**
     * get accessible for repository
     *
     * @return bool
     */
    protected function isAvailableAccessible(): bool
    {
        return method_exists($this->eloquentRepository, 'accessible') && $this->eloquentRepository->accessible();
    }
}
