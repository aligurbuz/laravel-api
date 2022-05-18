<?php

declare(strict_types=1);

namespace App\Factory\Cache;

use App\Factory\Cache\Interfaces\CacheInterface;

/**
 * Class Cache
 * @package App\Factory\Cache
 */
class Cache extends CacheManager implements CacheInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * Cache constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    public function getInstance(): object
    {
        // TODO: Implement getInstance() method.
    }

    public function set(string $key, mixed $value): void
    {
        // TODO: Implement set() method.
    }

    public function get(string $key): mixed
    {
        // TODO: Implement get() method.
    }

    public function hset(string $key, string $field, mixed $value): void
    {
        // TODO: Implement hset() method.
    }

    public function hget(string $key, string $field, ?callable $callback = null): mixed
    {
        // TODO: Implement hget() method.
    }

    public function exists(string $key): bool
    {
        // TODO: Implement exists() method.
    }

    public function hexists(string $key, mixed $field): bool
    {
        // TODO: Implement hexists() method.
    }
}
