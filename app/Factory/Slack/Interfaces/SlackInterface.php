<?php

declare(strict_types=1);

namespace App\Factory\Slack\Interfaces;

interface SlackInterface
{
    /**
     * @return void
     */
    public function getError500() : void;
}
