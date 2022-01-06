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
     * the fired event after create method for repository
     *
     * @param array $result
     * @param array $clientData
     * @return void
     */
    public function eventFireAfterCreate(array $result = [],array $clientData = []): void
    {
        //
    }


    /**
     * the fired event after update method for repository
     *
     * @param array $result
     * @param array $clientData
     * @return void
     */
    public function eventFireAfterUpdate(array $result = [],array $clientData = []): void
    {
        //
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
