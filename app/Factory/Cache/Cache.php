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
}
