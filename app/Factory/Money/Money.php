<?php

declare(strict_types=1);

namespace App\Factory\Money;

use Money\Money as MM;
use Brick\Money\Money as M;
use Brick\Math\RoundingMode;
use App\Services\Money\MoneyManager;
use App\Factory\Money\Interfaces\MoneyInterface;
use Brick\Money\Exception\MoneyMismatchException;
use Brick\Money\Exception\UnknownCurrencyException;

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
    protected MoneyManager $money;

	/**
	 * Money constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
        $this->money = new MoneyManager();
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
        return $this->money->toCent($amount,$currency);
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
        return $this->money->currency($amount,$currency);
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
        $amount = is_string($amount) ? $this->toCent($amount) : $amount;

        return $this->money->decimal($amount,$currency);
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
        $money1 = is_string($money1) ? $this->toCent($money1) : $money1;
        $money2 = is_string($money2) ? $this->toCent($money2) : $money2;

        return $this->money->add($money1,$money2,$currency);
    }

    /**
     * Returns a new Money object that represents
     * the difference of this and another Money object.
     *
     * @param string|int $money1
     * @param string|int $money2
     * @param string|null $currency
     * @return mixed
     */
    public function subtract(string|int $money1,string|int $money2,?string $currency = null): mixed
    {
        $money1 = is_string($money1) ? $this->toCent($money1) : $money1;
        $money2 = is_string($money2) ? $this->toCent($money2) : $money2;

        return $this->money->subtract($money1,$money2,$currency);
    }

    /**
     * Returns a new Money object that represents
     * the multiplied value by the given factor.
     *
     * @param string|int $money1
     * @param float $multiply
     * @param string|null $currency
     * @return mixed
     */
    public function multiply(string|int $money1, float $multiply, ?string $currency = null): mixed
    {
        $money1 = is_string($money1) ? $this->toCent($money1) : $money1;

        return $this->money->multiply($money1,$multiply,$currency);
    }

    /**
     * Returns a new Money object that represents
     * the divided value by the given factor.
     *
     * @param string|int $money1
     * @param float $divide
     * @param string|null $currency
     * @param mixed $rounding
     * @return mixed
     */
    public function divide(string|int $money1, float $divide, ?string $currency = null,mixed $rounding = MM::ROUND_HALF_UP): mixed
    {
        $money1 = is_string($money1) ? $this->toCent($money1) : $money1;

        return $this->money->divide($money1,$divide,$currency,$rounding);
    }

    /**
     * Calculates the tax of money
     *
     * @param string|int $money
     * @param string|null $tax
     * @param string|null $currency
     * @return string
     *
     * @throws UnknownCurrencyException
     * @throws MoneyMismatchException
     */
    public function tax(string|int $money,?string $tax = null,?string $currency = null) : string
    {
        $money = is_string($money) ? $this->toCent($money) : $money;

        $currency = $currency ?? currency();
        $tax = $tax ?? tax();

        $moneyAmount = M::ofMinor($money,$currency);
        $taxAmount = $moneyAmount->dividedBy(100,RoundingMode::CEILING)->multipliedBy($tax,RoundingMode::CEILING);

        return $moneyAmount->plus($taxAmount)->getMinorAmount()->jsonSerialize();
    }


}
