<?php

declare(strict_types=1);

namespace App\Factory\Money;

use App\Factory\Factory;
use App\Factory\Tax\Interfaces\TaxInterface;
use App\Factory\Money\Interfaces\MoneyInterface;
use App\Services\Money\MoneyManager as M;

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
     * @var M
     */
    protected M $money;

	/**
	 * Money constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
        $this->money = (new M);
	}

    /**
     * Adds two float values.
     *
     * @param float $money1
     * @param float $money2
     * @return float
     */
    public function add(float $money1,float $money2): float
    {
        return moneyFormatter(($money1 + $money2));
    }

    /**
     * Subtracts two float values.
     *
     * @param float $money1
     * @param float $money2
     * @return float
     */
    public function subtract(float $money1,float $money2): float
    {
        return moneyFormatter(($money1 - $money2));
    }

    /**
     * get currency for money factory
     *
     * @param float $money
     * @param string|null $currency
     * @return string
     */
    public function currency(float $money,?string $currency = null): string
    {
        $currency = $currency ?? currency();

        return $this->money->currency($money,$currency);
    }

    /**
     * Calculates the tax of money
     *
     * @param float $money
     * @return TaxInterface
     */
    public function tax(float $money): TaxInterface
    {
        $tax = tax();
        $taxRate = ($money / 100) * $tax;

        return Factory::tax(['money' => $money,'tax' => $taxRate]);
    }


}
