<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Timezones\Promoters\Timezones;

trait TimezonesPromoterTrait
{
    /**
     * get auto TimezonesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function timezonesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
