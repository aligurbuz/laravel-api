<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Genders;

use App\Models\Entities\CustomerGender;

trait GendersPromoterTrait
{
    /**
     * get auto GendersRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function gendersRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }


    /**
     * get entity for repository
     *
     * @return CustomerGender
     */
    public function entity(): CustomerGender
    {
        return parent::entity();
    }
}
