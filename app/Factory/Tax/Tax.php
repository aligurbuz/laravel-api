<?php

declare(strict_types=1);

namespace App\Factory\Tax;

use App\Factory\Tax\Interfaces\TaxInterface;

/**
 * Class Tax
 * @package App\Factory\Tax
 */
class Tax extends TaxManager implements TaxInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * @var float
     */
    protected float $money = 0;

    /**
     * @var float
     */
    protected float $tax = 0;

    /**
     * Tax constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;

        $this->tax = $this->binds['tax'] ?? 0;
        $this->money = $this->binds['money'] ?? 0;
    }

    /**
     * get tax rate for tax factory
     *
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }

    /**
     * get money amount for tax factory
     *
     * @return float
     */
    public function getMoney(): float
    {
        return $this->money;
    }

    /**
     * get total from tax factory
     *
     * @return float
     */
    public function getTotal(): float
    {
        return moneyFormatter($this->getMoney() + $this->getTax());
    }
}
