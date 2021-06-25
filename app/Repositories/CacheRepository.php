<?php

declare(strict_types=1);

namespace App\Repositories;

/**
 * Trait CacheRepository
 * @package App\Repositories
 */
trait CacheRepository
{
    /**
     * make cache model data for repository
     *
     * @param callable $callback
     * @return mixed
     */
    public function cacheHandler(callable $callback) : mixed
    {
        return call_user_func($callback);
    }
}
