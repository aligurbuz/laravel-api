<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate;

use App\Facades\Authenticate\Authenticate;
use App\Models\Role;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\Resources\Gate\Events\Roles\AfterCreate;
use App\Repositories\Resources\Gate\Events\Roles\AfterUpdate;
use App\Repositories\Resources\Gate\Events\Roles\BeforeCreate;
use App\Repositories\Resources\Gate\Events\Roles\BeforeUpdate;
use App\Repositories\Resources\Gate\Promoters\Roles\RolesPromoterTrait;
use App\Repositories\Resources\Gate\PropertyHandlers\RolesPropertyHandlerTrait;

class RolesRepository extends EloquentRepository implements RolesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use RolesPromoterTrait;
    use GeneralPromoterTrait;
    use RolesPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Role::class;

    /**
     * getUser for role repository
     *
     * @return object
     */
    public function user(): object
    {
        return $this->code(Authenticate::role_code());
    }
}
