<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate;

use App\Models\Role;
use App\Repositories\EloquentRepository;
use App\Facades\Authenticate\Authenticate;
use App\Repositories\Resources\Gate\Events\Roles\AfterCreate;
use App\Repositories\Resources\Gate\Events\Roles\AfterUpdate;
use App\Repositories\Resources\Gate\Events\Roles\BeforeCreate;
use App\Repositories\Resources\Gate\Events\Roles\BeforeUpdate;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;
use App\Repositories\Resources\Gate\PropertyHandlers\RolesPropertyHandlerTrait;

class RolesRepository extends EloquentRepository implements RolesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use RolesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Role::class;

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
     * getUser for role repository
     *
     * @return object
     */
	public function user() : object
    {
        return $this->code(Authenticate::role_code());
    }
}
