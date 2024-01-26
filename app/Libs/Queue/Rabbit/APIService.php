<?php

namespace App\Libs\Queue\Rabbit;

use PhpAmqpLib\Channel\AbstractChannel;
use PhpAmqpLib\Channel\AMQPChannel;

class APIService
{
    /**
     * @var AbstractChannel|AMQPChannel
     */
    protected AbstractChannel|AMQPChannel $channel;

    /**
     * @var string
     */
    protected string $type = "topic";

    /**
     * @param string $queue
     * @param bool $render
     * @return array|bool
     */
    public function getMessagesByQueue(string $queue, bool $render = false): bool|array
    {
        $messages = [];

        while ($message = $this->channel->basic_get($queue)) {
            $messages[] = $message->body;
        }

        if ($render) {
            foreach ($messages as $message) {
                echo $message . PHP_EOL;
            }
            return true;
        }

        return $messages;
    }

    /**
     * @return array
     */
    public function getAllExchanges(): array
    {
        $exchanges = $this->channel->exchange_declare('', false, false, true, false);

        return array_map(function ($exchange) {
            return $exchange->exchange;
        }, $exchanges);
    }

    /**
     * @return array
     */
    public function getAllQueues(): array
    {
        $queues = $this->channel->queue_declare('', false, false, true, false);

        return array_map(function ($queue) {
            return $queue->queue;
        }, $queues);
    }
}
