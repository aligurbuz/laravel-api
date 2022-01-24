<?php

declare(strict_types=1);

namespace App\Factory\Notify;

use App\Jobs\Deployment;
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
     * You can write custom notifications about internal server errors in this method.
     *
     * @return void
     */
    public function internalServerError() : void
    {
        $this->slack500Formatter(function($message){
            $this->push('error500',$message);
        });
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
        dispatch(new SlackPusher($channel,$message));
    }

    /**
     * The method by which you can push your deployment information.
     *
     * @param string $message
     * @return void
     */
    public function deployment(string $message) : void
    {
        dispatch(new Deployment('deployment',$message));
    }
}
