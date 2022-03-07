<?php

declare(strict_types=1);

namespace App\Factory\Money;

use App\Services\Money\MoneyManager;
use App\Factory\Money\Interfaces\MoneyInterface;

/**
 * Class Money
 * @package App\Factory\Money
 */
class Money extends MoneyManager implements MoneyInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

    /**
     * @var MoneyManager
     */
    protected MoneyManager $client;

	/**
	 * Money constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
        $this->client = new MoneyManager();
	}

    /**
     * Converts the given integer to cents.
     *
     * @param string $amount
     * @param string|null $currency
     * @return string
     */
    public function toCent(string $amount, ?string $currency = null): string
    {
        return $this->client->toCent($amount,$currency);
    }

    /**
     * Formats a Money object using intl extension
     *
     * @param string|int $amount
     * @param string|null $currency
     * @return string
     */
    public function currency(string|int $amount,?string $currency = null): string
    {
        return $this->client->currency($amount,$currency);
    }

    /**
     * Formats a Money object using intl extension
     *
     * @param string|int $amount
     * @param string|null $currency
     * @return string
     */
    public function decimal(string|int $amount,?string $currency = null): string
    {
        return $this->client->decimal($amount,$currency);
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
    public function add(string|int $money1,string|int $money2,?string $currency = null): mixed
    {
        return $this->client->add($money1,$money2,$currency);
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
    public function subtract(string|int $money1,string|int $money2,?string $currency = null): mixed
    {
        return $this->client->subtract($money1,$money2,$currency);
    }
}
