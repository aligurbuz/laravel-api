<?php

declare(strict_types=1);

namespace App\Factory\Payment;

use App\Factory\Payment\Interfaces\PaymentInterface;

/**
 * Class Stripe
 * @package App\Factory\Payment
 */
class Stripe extends PaymentManager implements PaymentInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * Stripe constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }
}
