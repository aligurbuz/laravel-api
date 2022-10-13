<?php

declare(strict_types=1);

namespace App\Factory\Payment\Interfaces;

use App\Factory\Payment\CardConnect;
use App\Factory\Payment\Payment;
use App\Factory\Payment\Stripe;

interface PaymentInterface
{
    /**
     * @param array $payLoad
     * @return array
     * @see CardConnect::createWithCard()
     * @see Payment::createWithCard()
     * @see Stripe::createWithCard()
     */
    public function createWithCard(array $payLoad = []): array;

    /**
     * @param array $payLoad
     * @return array
     * @see CardConnect::createWithCard()
     * @see Payment::createWithCard()
     * @see Stripe::createWithCard()
     */
    public function createWithSavedCard(array $payLoad = []) : array;
}
