<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Countries\Promoters\Countries;

trait CountriesPromoterTrait
{
    /**
     * get auto CountriesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function countriesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
