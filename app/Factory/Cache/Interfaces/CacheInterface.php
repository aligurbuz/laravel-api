<?php

declare(strict_types=1);

namespace App\Factory\Cache\Interfaces;

interface CacheInterface
{
    /**
     * @return object
     */
    public function getInstance() : object;

    /**
     * @param string $key
     * @param mixed $value
     */
    public function set(string $key,mixed $value) : void;

    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key) : mixed;

    /**
     * @param string $key
     * @param string $field
     * @param mixed $value
     */
    public function hset(string $key,string $field,mixed $value) : void;

    /**
     * @param string $key
     * @param string $field
     * @param callable|null $callback
     * @return mixed
     */
    public function hget(string $key,string $field,?callable $callback = null) : mixed;

    /**
     * @param string $key
     * @return bool
     */
    public function exists(string $key) : bool;

    /**
     * @param string $key
     * @param mixed $field
     * @return bool
     */
    public function hexists(string $key,mixed $field) : bool;
}
