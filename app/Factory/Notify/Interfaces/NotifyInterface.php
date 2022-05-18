<?php

declare(strict_types=1);

namespace App\Factory\Notify\Interfaces;

use App\Factory\Notify\Slack;

interface NotifyInterface
{
    /**
     * @param string $channel
     * @param string $message
     * @see Slack::push()
     */
    public function push(string $channel, string $message): void;

    /**
     * @return void
     * @see Slack::internalServerError()
     */
    public function internalServerError(): void;

    /**
     * @param string $message
     * @see Slack::deployment()
     */
    public function deployment(string $message): void;
}
