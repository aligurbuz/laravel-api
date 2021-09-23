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
     * @var array
     */
	protected array $resource = ['openTimelist'];

	/**
	 * Date constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * returns open time list for the given array data
     *
     * @param array $data
     * @return array
     */
	public function openTimeList(array $data = []) : array
    {
        return ($this->binds[__FUNCTION__])->handle($data);
    }
}
