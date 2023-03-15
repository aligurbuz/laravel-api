<?php

namespace App\Facades\Sms;

use App\Jobs\SmsSender;

class SmsManager
{
    /**
     * @var string|null
     */
    protected ?string $to = null;

    /**
     * @var string|null
     */
    protected ?string $message = null;

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public static function __callStatic(string $name, array $arguments)
    {
        $method = 'set' . ucfirst($name);

        return (new self())->$method($arguments[0]);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        $method = ($name === 'send') ? 'sendSms' : 'set' . ucfirst($name);

        return $this->$method(($arguments[0] ?? ''));
    }

    /**
     * "to" number for sms
     *
     * @param string $to
     * @return $this
     */
    protected function setTo(string $to): self
    {
        $this->to = $to;

        return $this;
    }

    /**
     * "message" string for sms
     *
     * @param string $message
     * @return $this
     */
    protected function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return void
     */
    protected function sendSms(): void
    {
        dispatch(new SmsSender($this->to, $this->message));
    }
}
