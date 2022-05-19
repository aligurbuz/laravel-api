<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Registration\Promoters\Registration;

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
}
