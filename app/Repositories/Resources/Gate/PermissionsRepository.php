<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate;

use App\Models\Permission;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Gate\Contracts\PermissionsRepositoryContract;

class PermissionsRepository extends EloquentRepository implements PermissionsRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Permission::class;

	/**
	 * get client ranges for repository
	 *
	 * @var array|string[]
	 */
	protected array $ranges = [];

    /**
     * @var array|string[]
     */
	protected array $localization = ['description'];

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
     * get endpoint criteria for permission repository
     *
     * @param string|null $endpoint
     * @return PermissionsRepositoryContract
     */
	public function endpoint(?string $endpoint = null) : PermissionsRepositoryContract
    {
        $this->repository = $this->instance()->where(__FUNCTION__,($endpoint ?? endpoint()));

        return $this;
    }
}
