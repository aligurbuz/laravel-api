<?php

declare(strict_types=1);

namespace App\Factory\Sms\Interfaces;

use App\Factory\Sms\Twilio;

interface SmsInterface
{
    /**
     * @param string $number
     * @return SmsInterface
     * @see Twilio::to()
     */
    public function to(string $number) : SmsInterface;

    /**
     * @param string $message
     * @return SmsInterface
     * @see Twilio::message()
     */
    public function message(string $message) : SmsInterface;

    /**
     * @return array
     * @see Twilio::send()
     */
    public function send(): array;
}
