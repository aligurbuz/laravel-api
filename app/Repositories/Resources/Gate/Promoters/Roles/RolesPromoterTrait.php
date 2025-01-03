<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate\Promoters\Roles;

use App\Factory\Factory;
use App\Models\Entities\Role;

trait RolesPromoterTrait
{
    /**
     * get auto RolesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function rolesRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get entity for repository
     *
     * @return Role
     */
    public function entity(): Role
    {
        return parent::entity();
    }

    /**
     * Appends to the end of the returned data.
     *
     * @return array
     */
    public function appends(): array
    {
        return [
            'permissions' => Factory::permission()->get()
        ];
    }
}
