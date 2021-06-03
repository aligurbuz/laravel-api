<?php

declare(strict_types=1);

namespace App\Factory\Notify;

use App\Jobs\SlackPusher;
use App\Factory\Notify\Interfaces\NotifyInterface;

/**
 * Class Slack
 * @package App\Factory\Notify
 */
class Slack extends NotifyManager implements NotifyInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

    /**
     * @var array|string[]
     */
	protected array $resource = ['slack500Formatter'];

	/**
	 * Slack constructor
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
        $this->slack500Formatter(function($pusher){
            $this->push('logger',$pusher);
        });
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
        dispatch(new SlackPusher($channel,$message));
    }
}
