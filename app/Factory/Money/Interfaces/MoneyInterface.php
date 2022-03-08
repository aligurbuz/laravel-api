<?php

declare(strict_types=1);

namespace App\Factory\Money\Interfaces;

use App\Services\Money\MoneyManager;

interface MoneyInterface
{
    /**
     * @param string $amount
     * @param string|null $currency
     * @return string
     * @see MoneyManager::toCent()
     */
    public function toCent(string $amount, ?string $currency = null): string;

    /**
     * @param string|int $amount
     * @param string|null $currency
     * @return string
     * @see MoneyManager::currency()
     */
    public function currency(string|int $amount,?string $currency = null): string;

    /**
     * @param string|int $amount
     * @param string|null $currency
     * @return string
     * @see MoneyManager::decimal()
     */
    public function decimal(string|int $amount,?string $currency = null): string;

    /**
     * @param string|int $money1
     * @param string|int $money2
     * @param string|null $currency
     * @return mixed
     * @see MoneyManager::add()
     */
    public function add(string|int $money1,string|int $money2,?string $currency = null): mixed;

    /**
     * @param string|int $money1
     * @param float $multiply
     * @param string|null $currency
     * @return mixed
     * @see MoneyManager::multiply()
     */
    public function multiply(string|int $money1,float $multiply,?string $currency = null): mixed;

    /**
     * @param string|int $money1
     * @param float $multiply
     * @param string|null $currency
     * @return mixed
     * @see MoneyManager::divide()
     */
    public function divide(string|int $money1,float $multiply,?string $currency = null): mixed;

    /**
     * @param string|int $money1
     * @param string|int $money2
     * @param string|null $currency
     * @return mixed
     * @see MoneyManager::subtract()
     */
    public function subtract(string|int $money1,string|int $money2,?string $currency = null): mixed;
}
