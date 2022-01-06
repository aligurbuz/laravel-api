<?php

declare(strict_types=1);

namespace App\Repositories\Resources\SuperAdmins;

use App\Models\SuperAdmin;
use App\Exceptions\Exception;
use App\Facades\Authenticate\ApiKey;
use App\Repositories\EloquentRepository;
use App\Facades\Authenticate\Authenticate;
use App\Repositories\Resources\SuperAdmins\Contracts\SuperAdminsRepositoryContract;

class SuperAdminsRepository extends EloquentRepository implements SuperAdminsRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = SuperAdmin::class;

	/**
	 * get client ranges for repository
	 *
	 * @var array|string[]
	 */
	protected array $ranges = [];

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
