<?php

declare(strict_types=1);

namespace App\Factory\UpDown;

use App\Factory\UpDown\Interfaces\UpDownInterface;

/**
 * Class Database
 * @package App\Factory\UpDown
 */
class Database extends UpDownManager implements UpDownInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

	/**
	 * Database constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}
}
