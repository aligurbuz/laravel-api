<?php

declare(strict_types=1);

namespace App\Factory\Repository;

use App\Factory\Repository\Interfaces\RepositoryInterface;

/**
 * Class Redis
 * @package App\Factory\Repository
 */
class Redis extends RepositoryManager implements RepositoryInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

    /**
     * @var array|string[]
     */
    protected array $resource = [];

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
     * This method saves the callback value to cache and pulls it from there if available.
     *
     * @param callable $callback
     * @return mixed
     */
	public function cache(callable $callback) : mixed
    {
        return call_user_func($callback);
    }
}
