<?php

declare(strict_types=1);

namespace App\Factory\Cache;

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
	 * Redis constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}
}
