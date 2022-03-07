<?php

namespace App\Services\Money;

use Money\Formatter\DecimalMoneyFormatter;
use Money\Money;
use Money\Currency;
use Money\Currencies\ISOCurrencies;
use Money\Formatter\IntlMoneyFormatter;
use Money\Parser\IntlLocalizedDecimalParser;

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

        $numberFormatter = new \NumberFormatter('nl_NL', \NumberFormatter::DECIMAL);
        $moneyParser = new IntlLocalizedDecimalParser($numberFormatter, $currencies);

        $money = $moneyParser->parse($amount, new Currency(($currency ?? currency())));


        return $money->getAmount();
    }

    /**
     * Formats a Money object using intl extension.
     *
     * @param string|int $amount
     * @param string|null $currency
     * @return string
     */
    public static function currency(string|int $amount,?string $currency = null): string
    {
        $money = new Money($amount, new Currency(($currency ?? currency())));
        $currencies = new ISOCurrencies();

        $numberFormatter = new \NumberFormatter('en_US', \NumberFormatter::CURRENCY);
        $moneyFormatter = new IntlMoneyFormatter($numberFormatter, $currencies);

        return $moneyFormatter->format($money);
    }

    /**
     * This formatter outputs a simple decimal string
     * which is always in a consistent format independent of locale
     *
     * @param string|int $amount
     * @param string|null $currency
     * @return string
     */
    public static function decimal(string|int $amount,?string $currency = null): string
    {
        $money = new Money($amount, new Currency(($currency ?? currency())));
        $currencies = new ISOCurrencies();

        $moneyFormatter = new DecimalMoneyFormatter($currencies);

        return $moneyFormatter->format($money);
    }

    /**
     * Returns a new Money object that represents
     * the sum of this and another Money object.
     *
     * @param string|int $money1
     * @param string|int $money2
     * @param string|null $currency
     * @return mixed
     */
    public static function add(string|int $money1,string|int $money2,?string $currency = null): mixed
    {
        $currency = $currency ?? currency();

        $money1 = Money::$currency($money1);
        $money2 = Money::$currency($money2);

        return $money1->add($money2)->getAmount();
    }

    /**
     * Returns a new Money object that represents
     * the difference of this and an other Money object.
     *
     * @param string|int $money1
     * @param string|int $money2
     * @param string|null $currency
     * @return mixed
     */
    public static function subtract(string|int $money1,string|int $money2,?string $currency = null): mixed
    {
        $currency = $currency ?? currency();

        $money1 = Money::$currency($money1);
        $money2 = Money::$currency($money2);

        return $money1->subtract($money2)->getAmount();
    }
}
