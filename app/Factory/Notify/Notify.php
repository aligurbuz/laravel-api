<?php

declare(strict_types=1);

namespace App\Factory\Notify;

use App\Factory\Notify\Interfaces\NotifyInterface;

/**
 * Class Notify
 * @package App\Factory\Notify
 */
class Notify extends NotifyManager implements NotifyInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];


	/**
	 * Notify constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * we will push all 500 internal errors for the system to the slack channel.
     * The job that works on all slack messages is the SlackPusher class.
     *
     * @return void
     */
    public function internalServerError() : void
    {
        //
    }

    /**
     * pushes messages to the specified slack channel.
     *
     * @param string $channel
     * @param string $message
     * @return void
     */
    public function push(string $channel,string $message) : void
    {
        //
    }
}
