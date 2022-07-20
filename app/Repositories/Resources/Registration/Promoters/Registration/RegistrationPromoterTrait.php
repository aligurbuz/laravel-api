<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Registration\Promoters\Registration;

use App\Models\Entities\Registration;

trait RegistrationPromoterTrait
{
    /**
     * get auto RegistrationRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function registrationRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get entity for repository
     *
     * @return Registration
     */
    public function entity(): Registration
    {
        return parent::entity();
    }
}
