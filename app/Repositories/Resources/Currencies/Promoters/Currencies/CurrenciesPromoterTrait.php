<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Currencies\Promoters\Currencies;

use App\Models\Entities\Currency;

trait CurrenciesPromoterTrait
{
    /**
     * @var array|string[]
     */
    protected array $fakers = ['name' => 'currencyName'];

    /**
     * get auto CurrenciesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function currenciesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get entity for repository
     *
     * @return Currency
     */
    public function entity(): Currency
    {
        return parent::entity();
    }

    /**
     * get symbol faker for repository
     *
     * @return string
     */
    public function symbolFaker(): string
    {
        return faker()->currencyCode;
    }

    /**
     * get symbol faker for repository
     *
     * @return string
     */
    public function currencyNameFaker(): string
    {
        return $this->letterFaker(3);
    }
}
