<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Countries\Promoters\Districts;

trait DistrictsPromoterTrait
{
    /**
     * get auto DistrictsRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function districtsRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
