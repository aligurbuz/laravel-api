<?php

namespace App\Libs\Queue\Rabbit;

use Exception;
use PhpAmqpLib\Message\AMQPMessage;

class QueueService extends QueueConnectionService
{
    /**
     * @param string $messageBody
     * @return void
     */
    public function publish(string $messageBody): void
    {
        (new DLQService())->queueWithDLQ($this->queue, $this->type, $this->exchange, $this->routingKey);
        $this->callback();

        $message = new AMQPMessage($messageBody, $this->properties);
        $this->channel->basic_publish($message, $this->exchange, $this->routingKey);
        //$this->channel->batch_basic_publish($message);
    }

    /**
     * @return void
     * @throws Exception
     */
    public function consume(): void
    {
        $this->channel->basic_qos($this->prefetchSize, $this->prefetchCount, $this->isGlobal);

        foreach ($this->consumeQueues as $queue) {
            // main queue
            $this->channel->queue_declare($queue, false, true, false, false, false, (new QueueService())->arguments($queue));

            // Dead Letter Queues
            $this->channel->queue_declare($queue . "_dlq", false, true, false, false);

            // Consume main queue
            $this->channel->basic_consume($queue, $queue . "_consume", false, false, false, false,
                function (AMQPMessage $message) use ($queue) {
                    //echo "Message consumed: " . $message->body;
                    (new DLQService)->consumeProcess($message);
                }
            );

            // Consume dead letter queue
            $this->channel->basic_consume($queue . "_dlq", $queue . "_dlq_consume", false, false, false, false,
                function (AMQPMessage $message) use ($queue) {
                    echo "Message consumed: " . $message->body;
                    (new DLQService)->consumeProcess($message);
                }
            );
        }

        while ($this->channel->is_consuming()) {
            $this->channel->wait();
        }
    }

    /**
     * If Exchange Cannot Be Found or If No Queue Matches the Routing Key Is Found
     * @return void
     */
    public function callback(): void
    {
        $this->channel->set_return_listener(function ($replyCode, $replyText, $exchange, $routingKey, $message) {

            $message = [
                "replyCode" => $replyCode,
                "replyText" => $replyText,
                "exchange" => $exchange,
                "routingKey" => $routingKey,
                "message" => $message
            ];

            $this->error('Exchange or queue not found: ' . json_encode($message));
        });
    }

    /**
     * Queue arguments
     * @param string $queue
     * @param int $tries
     * @return array
     */
    public function arguments(string $queue, int $tries = 3): array
    {
        return [
            'x-dead-letter-exchange' => ['S', $queue . '_dlx'],
            'x-dead-letter-routing-key' => ['S', $queue . '_dlq'],
            'x-max-retries' => ['I', $tries],
            'x-message-ttl' => ['i', 100000],
        ];
    }

    /**
     * @throws Exception
     */
    public function __destruct()
    {
        $this->channel->close();
        $this->connection->close();
    }
}
