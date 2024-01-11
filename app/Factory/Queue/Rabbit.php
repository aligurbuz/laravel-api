<?php

declare(strict_types=1);

namespace App\Factory\Queue;

use App\Factory\Queue\Interfaces\QueueInterface;

/**
 * Class Rabbit
 * @package App\Factory\Queue
 */
class Rabbit extends QueueManager implements QueueInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];


	/**
	 * Rabbit constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    public function publish(): void
    {
        //
    }

    public function consume(): void
    {
        //
    }
}
