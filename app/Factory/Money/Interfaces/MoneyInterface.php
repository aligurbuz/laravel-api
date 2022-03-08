<?php

declare(strict_types=1);

namespace App\Factory\Money\Interfaces;

use App\Factory\Money\Money;
use Money\Money as M;

interface MoneyInterface
{
    /**
     * @param string $amount
     * @param string|null $currency
     * @return string
     * @see Money::toCent()
     */
    public function toCent(string $amount, ?string $currency = null): string;

    /**
     * @param string|int $amount
     * @param string|null $currency
     * @return string
     * @see Money::currency()
     */
    public function currency(string|int $amount,?string $currency = null): string;

    /**
     * @param string|int $amount
     * @param string|null $currency
     * @return string
     * @see Money::decimal()
     */
    public function decimal(string|int $amount,?string $currency = null): string;

    /**
     * @param string|int $money1
     * @param string|int $money2
     * @param string|null $currency
     * @return mixed
     * @see Money::add()
     */
    public function add(string|int $money1,string|int $money2,?string $currency = null): mixed;

    /**
     * @param string|int $money1
     * @param float $multiply
     * @param string|null $currency
     * @return mixed
     * @see Money::multiply()
     */
    public function multiply(string|int $money1, float $multiply, ?string $currency = null): mixed;

    /**
     * @param string|int $money1
     * @param float $divide
     * @param string|null $currency
     * @param mixed $rounding
     * @return mixed
     * @see Money::divide()
     */
    public function divide(string|int $money1, float $divide, ?string $currency = null,mixed $rounding = M::ROUND_HALF_UP): mixed;

    /**
     * @param string|int $money1
     * @param string|int $money2
     * @param string|null $currency
     * @return mixed
     * @see Money::subtract()
     */
    public function subtract(string|int $money1,string|int $money2,?string $currency = null): mixed;

    /**
     * @param string|int $money
     * @param string|null $tax
     * @return string
     * @see Money::tax()
     */
    public function tax(string|int $money,?string $tax = null) : string;
}
