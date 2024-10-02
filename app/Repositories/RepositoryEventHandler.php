<?php

namespace App\Repositories;

trait RepositoryEventHandler
{
    /**
     * It is a condition of the event capsule that is only for http.
     *
     * @return bool
     */
    public function onlyHttpEvent(): bool
    {
        return !app()->runningInConsole();
    }
}
