<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Profiles;

use App\Models\Entities\Customer;

trait ProfilesPromoterTrait
{
    /**
     * get auto ProfilesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function profilesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get entity for repository
     *
     * @return Customer
     */
    public function entity(): Customer
    {
        return parent::entity();
    }
}
