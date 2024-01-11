<?php

namespace App\Libs\Queue;

abstract class Manager
{
    /**
     * @var object|null
     */
    protected ?object $connection = null;

    /**
     * @param object $connection
     */
    public function __construct(object $connection)
    {
        $this->connection = $connection;
    }
}
