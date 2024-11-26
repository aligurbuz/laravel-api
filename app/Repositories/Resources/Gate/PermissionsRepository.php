<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate;

use App\Models\Permission;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Gate\Contracts\PermissionsRepositoryContract;
use App\Repositories\Resources\Gate\Events\Permissions\AfterCreate;
use App\Repositories\Resources\Gate\Events\Permissions\AfterUpdate;
use App\Repositories\Resources\Gate\Events\Permissions\BeforeCreate;
use App\Repositories\Resources\Gate\Events\Permissions\BeforeUpdate;
use App\Repositories\Resources\Gate\Promoters\Permissions\PermissionsPromoterTrait;
use App\Repositories\Resources\Gate\PropertyHandlers\PermissionsPropertyHandlerTrait;

class PermissionsRepository extends EloquentRepository implements PermissionsRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use GeneralPromoterTrait;
    use PermissionsPromoterTrait;
    use PermissionsPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Permission::class;

    /**
     * @var bool
     */
    protected bool $paginator = false;

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
