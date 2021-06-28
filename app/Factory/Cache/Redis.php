<?php

declare(strict_types=1);

namespace App\Factory\Cache;

use Predis\ClientInterface;
use App\Services\Redis as RedisInstance;
use App\Factory\Cache\Interfaces\CacheInterface;

/**
 * Class Redis
 * @package App\Factory\Cache
 */
class Redis extends CacheManager implements CacheInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

    /**
     * @var object|null
     */
	protected ?object $instance = null;

	/**
	 * Redis constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * get instance for cache factory
     *
     * @return ClientInterface
     */
	public function getInstance() : object
    {
        return RedisInstance::client();
    }

    /**
     * set redis key value for cache factory
     *
     * @param string $key
     * @param mixed $value
     * @return void
     */
	public function set(string $key,mixed $value) : void
    {
        $this->getInstance()->set($key,$value);
    }

    /**
     * set redis key field value for cache factory
     *
     * @param string $key
     * @param string $field
     * @param mixed $value
     * @return void
     */
    public function hset(string $key,string $field,mixed $value) : void
    {
        $this->getInstance()->hset($key,$field,$value);
    }

    /**
     * get value according to redis key for cache factory
     *
     * @param string $key
     * @return mixed
     */
    public function get(string $key) : mixed
    {
        return $this->getInstance()->get($key);
    }

    /**
     * get value according to redis key and field for cache factory
     *
     * @param string $key
     * @param string $field
     * @param callable|null $callback
     * @return mixed
     */
    public function hget(string $key,string $field,?callable $callback = null) : mixed
    {
        if(is_callable($callback)){
            if($this->hexists($key,$field)){
                return json_decode($this->hget($key,$field),true);
            }

            return call_user_func($callback);
        }

        return $this->getInstance()->hget($key,$field);
    }

    /**
     * checks if the key is valid for cache repository
     *
     * @param string $key
     * @return bool
     */
    public function exists(string $key) : bool
    {
        return !(($this->getInstance()->exists($key) === '0'));
    }

    /**
     * checks if the key is valid for cache repository
     *
     * @param string $key
     * @param mixed $field
     * @return bool
     */
    public function hexists(string $key,mixed $field) : bool
    {
        return !(($this->getInstance()->hexists($key, $field) === '0'));
    }
}
