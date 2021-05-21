<?php

declare(strict_types=1);

namespace App\Factory\Repository\Interfaces;

use App\Factory\Repository\Redis;

interface RepositoryInterface
{
    /**
     * @param callable $callback
     * @return mixed
     * @see Redis::cache()
     */
    public function cache(callable $callback) : mixed;
}

