<?php

declare(strict_types=1);

namespace App\Repositories\Resources\SuperAdmins;

use App\Models\SuperAdmin;
use App\Repositories\EloquentRepository;
use App\Facades\Authenticate\Authenticate;
use App\Repositories\Resources\SuperAdmins\Events\SuperAdmins\AfterCreate;
use App\Repositories\Resources\SuperAdmins\Events\SuperAdmins\AfterUpdate;
use App\Repositories\Resources\SuperAdmins\Events\SuperAdmins\BeforeCreate;
use App\Repositories\Resources\SuperAdmins\Events\SuperAdmins\BeforeUpdate;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;
use App\Repositories\Resources\SuperAdmins\PropertyHandlers\SuperAdminsPropertyHandlerTrait;

class SuperAdminsRepository extends EloquentRepository implements SuperAdminsRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use SuperAdminsPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = SuperAdmin::class;

	/**
	 * get auto SuperAdminsRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function superAdminsRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}

    /**
     * get authenticated user for super admin repository
     *
     * @return SuperAdminsRepositoryContract
     */
	public function authenticatedUser() : SuperAdminsRepositoryContract
    {
        $this->repository = $this->instance()->where('user_code',Authenticate::code());

        return $this;
    }
}
