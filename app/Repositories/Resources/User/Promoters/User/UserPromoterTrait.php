<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Promoters\User;

use App\Models\Entities\User;

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

    /**
     * get entity for repository
     *
     * @return User
     */
    public function entity(): User
    {
        return parent::entity();
    }
}
