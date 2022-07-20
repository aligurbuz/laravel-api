<?php

declare(strict_types=1);

namespace App\Repositories\Resources\SuperAdmins\Promoters\SuperAdmins;

use App\Models\Entities\SuperAdmin;

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

    /**
     * get entity for repository
     *
     * @return SuperAdmin
     */
    public function entity(): SuperAdmin
    {
        return parent::entity();
    }
}
