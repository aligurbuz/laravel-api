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
     * You can write custom notifications about internal server errors in this method.
     *
     * @return void
     */
    public function internalServerError() : void
    {
        //
    }

    /**
     * The method by which you can push your notifications.
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
