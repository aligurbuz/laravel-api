<?php

declare(strict_types=1);

namespace App\Factory\Money;

use App\Factory\Factory;
use App\Factory\Tax\Interfaces\TaxInterface;
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
	 * Money constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
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
