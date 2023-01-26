<?php

declare(strict_types=1);

namespace App\Factory\Calculator;

use App\Factory\Calculator\Interfaces\CalculatorInterface;

/**
 * Class Calculator
 * @package App\Factory\Calculator
 */
class Calculator extends CalculatorManager implements CalculatorInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

    /**
     * @var array
     */
    protected array $calculatorInstances = [
        'card' => [
            'instance1' => 'namespace',
        ]
    ];

	/**
	 * Calculator constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * @return float
     */
    public function card() : float
    {
        return ($this->calculatorInstances['instance1']/100);
    }
}
