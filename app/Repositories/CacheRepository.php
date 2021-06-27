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
        if(method_exists($this,who())){
            return $this->{who()}($callback);
        }

        return $this->proxy($callback);
    }

    /**
     * get admin client key for repository
     *
     * @param callable $callback
     * @return array
     */
    public function admin(callable $callback) : array
    {
        return $this->proxy($callback);
    }
}
