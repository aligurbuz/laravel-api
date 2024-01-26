<?php

declare(strict_types=1);

namespace App\Factory\Queue\Interfaces;

use App\Factory\Queue\Rabbit;

interface QueueInterface
{
    /**
     * @param array $data
     * @return void
     * @see Rabbit::publish()
     */
    public function publish(array $data = []): void;

    /**
     * @return void
     * @see Rabbit::consume()
     */
    public function consume(): void;
}
