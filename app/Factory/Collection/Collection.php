<?php

declare(strict_types=1);

namespace App\Factory\Collection;

use App\Factory\Collection\Interfaces\CollectionInterface;

/**
 * Class Collection
 * @package App\Factory\Collection
 */
class Collection extends CollectionManager implements CollectionInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

    /**
     * get collection data
     *
     * @var array
     */
	protected array $data = [];

	/**
	 * Collection constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
		$this->data = $this->binds[0] ?? [];
	}

    /**
     * It is a method for adding the double elements of two given arrays.
     *
     * @param array $first
     * @param array $last
     * @return array
     */
	public function additionDoubleElementsOfArrays(array $first = [], array $last  = []) : array
    {
        return $this->additionSubtractionProcess($first,$last);
    }

    /**
     * It is a method for subtraction the double elements of two given ar   rays.
     *
     * @param array $first
     * @param array $last
     * @return array
     */
    public function subtractionDoubleElementsOfArrays(array $first = [], array $last  = []) : array
    {
        return $this->additionSubtractionProcess($first,$last,'subtraction');
    }
}
