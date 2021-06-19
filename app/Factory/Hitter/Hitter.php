<?php

declare(strict_types=1);

namespace App\Factory\Hitter;

use App\Factory\Hitter\Interfaces\HitterInterface;

/**
 * Class Hitter
 * @package App\Factory\Hitter
 */
class Hitter extends HitterManager implements HitterInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

	/**
	 * Hitter constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}
}
