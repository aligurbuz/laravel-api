<?php

namespace App\Libs\Queue\Rabbit;

use App\Facades\Support\Queue\Process;
use Exception;
use Illuminate\Http\JsonResponse;
use PhpAmqpLib\Message\AMQPMessage;

class DLQService extends QueueConnectionService
{
    /**
     * @param string $queue
     * @param string $type
     * @param string $exchange
     * @param string $routingKey
     * @param int $tries
     * @return void
     */
    public function queueWithDLQ(string $queue, string $type, string $exchange, string $routingKey, int $tries = 3): void
    {
        // Queue confirm_publish activate
        $this->channel->confirm_select();

        // main queue for exchange define
        $this->channel->exchange_declare($exchange, $type, false, true, false);

        // dl queue for exchange define
        $this->channel->exchange_declare($exchange . '_dlx', $type, false, true, false);

        // main queue define
        $this->channel->queue_declare($queue, false, true, false, false, false, (new QueueService())->arguments($queue, $tries));

        // DLQ queue define
        $this->channel->queue_declare($queue . '_dlq', false, true, false, false);

        // make bind main queue
        $this->channel->queue_bind($queue, $exchange, $routingKey);

        // make bind dlq
        $this->channel->queue_bind($queue, $exchange . '_dlx', $routingKey . '_dlq');
    }

    /**
     * Consume process
     * @param AMQPMessage $message
     * @return JsonResponse
     */
    public function consumeProcess(AMQPMessage $message): JsonResponse
    {
        try {
            $this->successScenarios($message);
        } catch (Exception $exception) {
            $this->failedScenarios($message, $exception);
        }

        return response()->json(['success' => true]);
    }

    /**
     * All success scenarios
     * @param AMQPMessage $message
     * @return string|void
     */
    public function successScenarios(AMQPMessage $message)
    {
        $data = json_decode($message->body, 1);
        $routing = explode('.', $message->getRoutingKey());

        Process::{$routing[0]}($data, $routing[1]);

        // sign as successfully when the message performed
        $this->channel->basic_ack($message->getDeliveryTag());
        echo "Success process : " . $message->getConsumerTag() . " - " . $message->getBody() . "\n";
    }

    /**
     * All failed scenarios
     * @param $message
     * @param $exception
     * @return void
     */
    public function failedScenarios($message, $exception): void
    {
        // add re-queue when it failed
        $this->channel->basic_nack($message->getDeliveryTag(), false, true);
        // or removable on the queue
        // $this->channel->basic_reject($message->getDeliveryTag(), false);
        echo "Failed process: " . $exception->getMessage();
    }
}
