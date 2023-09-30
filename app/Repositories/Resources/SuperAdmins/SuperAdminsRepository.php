<?php

declare(strict_types=1);

namespace App\Repositories\Resources\SuperAdmins;

use App\Facades\Database\Authenticate\Authenticate;
use App\Models\SuperAdmin;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\Resources\SuperAdmins\Events\SuperAdmins\AfterCreate;
use App\Repositories\Resources\SuperAdmins\Events\SuperAdmins\AfterUpdate;
use App\Repositories\Resources\SuperAdmins\Events\SuperAdmins\BeforeCreate;
use App\Repositories\Resources\SuperAdmins\Events\SuperAdmins\BeforeUpdate;
use App\Repositories\Resources\SuperAdmins\Promoters\SuperAdmins\SuperAdminsPromoterTrait;
use App\Repositories\Resources\SuperAdmins\PropertyHandlers\SuperAdminsPropertyHandlerTrait;

class SuperAdminsRepository extends EloquentRepository implements SuperAdminsRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use GeneralPromoterTrait;
    use SuperAdminsPromoterTrait;
    use SuperAdminsPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = SuperAdmin::class;

    /**
     * get authenticated user for super admin repository
     *
     * @return SuperAdminsRepositoryContract
     */
    public function authenticatedUser(): SuperAdminsRepositoryContract
    {
        $this->repository = $this->instance()->where('user_code', Authenticate::code());

        return $this;
    }
}
