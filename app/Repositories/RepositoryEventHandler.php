<?php

namespace App\Repositories;

trait RepositoryEventHandler
{
    /**
     * @return bool
     */
    public function onlyHttpEvent(): bool
    {
        return !app()->runningInConsole();
    }
}
