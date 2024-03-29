<?php

declare(strict_types=1);

namespace App\Factory\Payment;

use App\Factory\Payment\Interfaces\PaymentInterface;

/**
 * Class CardConnect
 * @package App\Factory\Payment
 */
class CardConnect extends PaymentManager implements PaymentInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * @var array
     */
    protected array $order = [];

    /**
     * CardConnect constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
        $this->order = $this->binds['order'] ?? [];
    }

    /**
     * @return array
     */
    public function createWithCard(): array
    {
        return [];
    }

    /**
     * @return array
     */
    public function createWithSavedCard(): array
    {
        return [];
    }
}
