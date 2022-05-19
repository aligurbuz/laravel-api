<?php

declare(strict_types=1);

namespace App\Repositories\Resources\SuperAdmins\Promoters\SuperAdmins;

trait SuperAdminsPromoterTrait
{
    /**
     * get auto SuperAdminsRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function superAdminsRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
