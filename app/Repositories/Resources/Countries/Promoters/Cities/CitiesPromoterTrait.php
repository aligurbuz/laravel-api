<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Countries\Promoters\Cities;

use App\Models\Entities\City;

trait CitiesPromoterTrait
{
    /**
     * get auto CitiesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function citiesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get entity for repository
     *
     * @return City
     */
    public function entity(): City
    {
        return parent::entity();
    }
}
