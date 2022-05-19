<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate\Promoters\Permissions;

trait PermissionsPromoterTrait
{
    /**
     * get auto PermissionsRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function permissionsRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
