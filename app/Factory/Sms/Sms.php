<?php

declare(strict_types=1);

namespace App\Factory\Sms;

use App\Factory\Sms\Interfaces\SmsInterface;

/**
 * Class Sms
 * @package App\Factory\Sms
 */
class Sms extends SmsManager implements SmsInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * Sms constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * @param string $number
     * @return SmsInterface
     */
    public function to(string $number): SmsInterface
    {
        return $this;
    }

    /**
     * @param string $message
     * @return SmsInterface
     */
    public function message(string $message): SmsInterface
    {
        return $this;
    }

    /**
     * @return array
     */
    public function send(): array
    {
        return [];
    }
}
