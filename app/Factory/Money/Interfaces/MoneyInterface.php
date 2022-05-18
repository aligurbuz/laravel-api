<?php

declare(strict_types=1);

namespace App\Factory\Money\Interfaces;

use App\Factory\Money\Money;
use App\Factory\Tax\Interfaces\TaxInterface;

interface MoneyInterface
{
    /**
     * @param float $money1
     * @param float $money2
     * @return float
     * @see Money::add()
     */
    public function add(float $money1, float $money2): float;

    /**
     * @param float $money1
     * @param float $money2
     * @return float
     * @see Money::subtract()
     */
    public function subtract(float $money1, float $money2): float;

    /**
     * @param float $money1
     * @param float $money2
     * @return float
     * @see Money::multiply()
     */
    public function multiply(float $money1, float $money2): float;

    /**
     * @param float $money1
     * @param float $money2
     * @return float
     * @see Money::divide()
     */
    public function divide(float $money1, float $money2): float;

    /**
     * @param float $money
     * @return TaxInterface
     * @see Money::tax()
     */
    public function tax(float $money): TaxInterface;

    /**
     * @param float $money
     * @param string|null $currency
     * @return string
     * @see Money::currency()
     */
    public function currency(float $money, ?string $currency = null): string;
}
