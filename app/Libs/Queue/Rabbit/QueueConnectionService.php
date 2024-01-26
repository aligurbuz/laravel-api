<?php

namespace App\Libs\Queue\Rabbit;

use App\Libs\Reflection;
use App\Services\Queue\Process;
use Exception;
use Nette\InvalidArgumentException;
use PhpAmqpLib\Channel\AbstractChannel;
use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class QueueConnectionService
{
    /**
     * @var AbstractChannel|AMQPChannel
     */
    protected AbstractChannel|AMQPChannel $channel;

    /**
     * @var string
     */
    protected string $exchange = 'notification';

    /**
     * @var string
     */
    protected string $queue = 'mail';

    /**
     * @var string
     */
    protected string $type = 'topic';

    /**
     * @var string
     */
    protected string $routingKey = 'notification.default';

    /**
     * @var array
     */
    protected array $consumeQueues = [];

    /**
     * @var array|int[]
     */
    protected array $properties = ['delivery_mode' => 2];

    /**
     * @var int
     */
    protected int $prefetchCount = 5000;

    /**
     * @var int
     */
    protected int $prefetchSize = 0;

    /**
     * @var bool
     */
    protected bool $isGlobal = false;

    /**
     * @var AMQPStreamConnection
     */
    protected AMQPStreamConnection $connection;

    /**c
     * @throws Exception
     */
    public function __construct()
    {
        $this->connection = new AMQPStreamConnection(
            config('queue.connections.rabbitmq.hosts.0.host'),
            config('queue.connections.rabbitmq.hosts.0.port'),
            config('queue.connections.rabbitmq.hosts.0.user'),
            config('queue.connections.rabbitmq.hosts.0.password'),
            config('queue.connections.rabbitmq.hosts.0.vhost')
        );

        $this->channel = $this->connection->channel();

        $this->consumeQueues = (new Reflection(Process::class))->getChildMethods();
    }

    /**
     * @return AMQPStreamConnection
     */
    public function getConnection(): AMQPStreamConnection
    {
        return $this->connection;
    }

    /**
     * @param string $exchange
     * @return $this
     */
    public function exchange(string $exchange): self
    {
        $this->exchange = $exchange;

        return $this;
    }

    /**
     * @param string $queue
     * @return $this
     */
    public function queue(string $queue): self
    {
        if (!in_array($queue, $this->consumeQueues)) {
            throw new InvalidArgumentException('Invalid queue: ' . $queue);
        }

        $this->queue = $queue;

        return $this;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function type(string $type): self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param string $routingKey
     * @return $this
     */
    public function routingKey(string $routingKey): self
    {
        $this->routingKey = $routingKey;
        return $this;
    }
}
