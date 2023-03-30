<?php

namespace App\Repositories\Globals;

abstract class GlobalSupporter
{
    /**
     * get accessible for repository
     *
     * @return bool
     */
    protected function isAccessible(): bool
    {
        return method_exists($this->eloquentRepository, 'accessible') && $this->eloquentRepository->accessible();
    }
}
