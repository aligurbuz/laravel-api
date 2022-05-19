<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Promoters\User;

trait UserPromoterTrait
{
    /**
     * get auto user range method
     *
     * @param object|null $builder
     * @return object
     */
    public function userRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
