<?php

declare(strict_types=1);

namespace App\Factory\Sms;

use App\Exceptions\Exception as AppException;
use App\Factory\Sms\Interfaces\SmsInterface;
use Exception;
use Twilio\Exceptions\ConfigurationException;
use Twilio\Rest\Client;

/**
 * Class Twilio
 * @package App\Factory\Sms
 */
class Twilio extends SmsManager implements SmsInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * @var Client
     */
    protected Client $client;

    /**
     * @var string|null
     */
    protected ?string $to = null;

    /**
     * @var string|null
     */
    protected ?string $message = null;

    /**
     * Twilio constructor
     *
     * @param array $binds
     * @throws ConfigurationException
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;

        $sid = config('sms.twilioSid');
        $token = config('sms.twilioToken');

        $this->client = new Client($sid, $token);
    }

    /**
     * It represents the number to which the sms will be sent.
     *
     * @param string $number
     * @return SmsInterface
     */
    public function to(string $number): SmsInterface
    {
        $this->to = $number;

        return $this;
    }

    /**
     * Contains the text to be sent as sms.
     *
     * @param string $message
     * @return SmsInterface
     */
    public function message(string $message): SmsInterface
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Sends sms with available information.
     *
     * @return array
     */
    public function send(): array
    {
        try {
            return [
                'smsResponse' => $this->client->messages->create($this->to,
                    [
                        'from' => config('sms.twilioPhoneNumber'),
                        'body' => $this->message
                    ]
                )
            ];
        } catch (Exception $exception) {
            AppException::customException($exception->getMessage(), [], true);
            return [];
        }

    }
}
