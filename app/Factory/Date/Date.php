<?php 

declare(strict_types=1);

namespace App\Factory\Date;

use App\Factory\Date\Interfaces\DateInterface;

/**
 * Class Date
 * @package App\Factory\Date
 */
class Date extends DateManager implements DateInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];


	/**
	 * Date constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}
}
