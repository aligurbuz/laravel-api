<?php

declare(strict_types=1);

namespace App\Factory\Slack\Interfaces;

use App\Factory\Slack\Slack;

/**
 * Interface SlackInterface
 * @package App\Factory\Slack\Interfaces
 */
interface SlackInterface
{
    /**
     * @return void
     * @see Slack::getError500()
     */
    public function getError500() : void;

    /**
     * @param $channel
     * @param $message
     * @see Slack::push()
     */
    public function push(string $channel,string $message) : void;
}
