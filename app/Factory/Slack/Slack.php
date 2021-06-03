<?php

declare(strict_types=1);

namespace App\Factory\Slack;

use App\Jobs\SlackPusher;
use App\Factory\Slack\Interfaces\SlackInterface;

/**
 * Class Slack
 * @package App\Factory\Slack
 */
class Slack extends SlackManager implements SlackInterface
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
	protected array $resource = ['html'];

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
	public function getError500() : void
    {
        $this->html500(function($pusher){
            dispatch(new SlackPusher('500Error',$pusher));
        });
    }

    /**
     * pushes messages to the specified slack channel.
     *
     * @param $channel
     * @param $message
     * @return void
     */
    public function push($channel,$message) : void
    {
        dispatch(new SlackPusher($channel,$message));
    }
}
