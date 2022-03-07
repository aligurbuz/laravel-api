<?php

namespace App\Services\Money;

use Money\Currency;
use Money\Currencies\ISOCurrencies;
use Money\Parser\DecimalMoneyParser;

class MoneyManager
{
    /**
     * Converts the given integer to cents.
     *
     * @param string $amount
     * @param string|null $currency
     * @return string
     */
    public static function toCent(string $amount,?string $currency = null): string
    {
        $currencies = new ISOCurrencies();
        $moneyParser = new DecimalMoneyParser($currencies);

        $money = $moneyParser->parse($amount, new Currency(($currency ?? currency())));

        return $money->getAmount();
    }
}
