<?php

declare(strict_types=1);

namespace App\Factory\Calculator\Interfaces;

use App\Factory\Calculator\Calculator;

interface CalculatorInterface
{
    /**
     * @return float
     * @see Calculator::cart()
     */
    public function cart() : float;
}
