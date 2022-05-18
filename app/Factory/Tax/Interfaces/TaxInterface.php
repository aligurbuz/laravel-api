<?php

declare(strict_types=1);

namespace App\Factory\Tax\Interfaces;

use App\Factory\Tax\Tax;

interface TaxInterface
{
    /**
     * @return float
     * @see Tax::getTax()
     */
    public function getTax(): float;

    /**
     * @return float
     * @see Tax::getMoney()
     */
    public function getMoney(): float;

    /**
     * @return float
     * @see Tax::getTotal()
     */
    public function getTotal(): float;
}
