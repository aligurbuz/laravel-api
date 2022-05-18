<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate;

use App\Models\Permission;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Resources\Gate\Events\Permissions\AfterCreate;
use App\Repositories\Resources\Gate\Events\Permissions\AfterUpdate;
use App\Repositories\Resources\Gate\Events\Permissions\BeforeCreate;
use App\Repositories\Resources\Gate\Events\Permissions\BeforeUpdate;
use App\Repositories\Resources\Gate\PropertyHandlers\PermissionsPropertyHandlerTrait;

class PermissionsRepository extends EloquentRepository implements PermissionsRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use PermissionsPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Permission::class;

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

    /**
     * get endpoint criteria for permission repository
     *
     * @param string|null $endpoint
     * @return PermissionsRepositoryContract
     */
    public function endpoint(?string $endpoint = null): PermissionsRepositoryContract
    {
        $this->repository = $this->instance()->where(__FUNCTION__, ($endpoint ?? endpoint()));

        return $this;
    }
}
