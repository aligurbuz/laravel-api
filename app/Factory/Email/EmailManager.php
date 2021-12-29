<?php

declare(strict_types=1);

namespace App\Factory\Email;

abstract class EmailManager
{
    /**
     * get queue for email factory instance
     *
     * @param mixed $queue
     */
    public function queue(mixed $queue) : void
    {
        dispatch($queue);
    }
}
