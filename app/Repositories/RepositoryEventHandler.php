<?php

namespace App\Repositories;

trait RepositoryEventHandler
{
    /**
     * @return bool
     */
    public function onlyHttp(): bool
    {
        return !app()->runningInConsole();
    }
}
