<?php

declare(strict_types=1);

namespace App\Factory\Queue;
use Exception;

use App\Factory\Queue\Interfaces\QueueInterface;
use App\Libs\Queue\Rabbit\QueueService;

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

    protected QueueService $queueService;


	/**
	 * Rabbit constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
        $this->queueService = new QueueService();
	}

    public function publish(array $data = []): void
    {
        $this->queueService
            ->queue($this->binds['queue'])
            ->routingKey($this->binds['routingKey'])
            ->publish(json_encode($data));
    }

    /**
     * @throws Exception
     */
    public function consume(): void
    {
        $this->queueService->consume();
    }
}
