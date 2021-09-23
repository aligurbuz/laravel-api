<?php

declare(strict_types=1);

namespace App\Factory\Date\Resource\OpenTimeList;

class OpenTimeList
{
    /**
     * @var array
     */
    protected array $binds = [];

    /**
     * Html constructor.
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    public function handle(array $data = []) : array
    {
        return [];
    }
}
