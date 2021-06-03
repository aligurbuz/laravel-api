<?php

declare(strict_types=1);

namespace App\Factory\Notify\Interfaces;

interface NotifyInterface
{
    /**
     * @param string $channel
     * @param string $message
     */
    public function push(string $channel,string $message) : void;

    /**
     * @return void
     */
    public function internalServerError() : void;
}
