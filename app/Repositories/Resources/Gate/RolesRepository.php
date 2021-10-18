<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate;

use App\Models\Role;
use App\Repositories\EloquentRepository;
use App\Facades\Authenticate\Authenticate;
use App\Repositories\Resources\Gate\Contracts\RolesRepositoryContract;

class RolesRepository extends EloquentRepository implements RolesRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Role::class;

	/**
	 * get client ranges for repository
	 *
	 * @var array|string[]
	 */
	protected array $ranges = [];


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
