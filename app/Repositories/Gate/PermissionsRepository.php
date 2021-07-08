<?php

declare(strict_types=1);

namespace App\Repositories\Gate;

use App\Models\Permission;
use App\Repositories\EloquentRepository;
use App\Repositories\Gate\Contracts\PermissionsRepositoryContract;

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
