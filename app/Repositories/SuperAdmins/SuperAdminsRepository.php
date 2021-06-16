<?php 

declare(strict_types=1);

namespace App\Repositories\SuperAdmins;

use App\Models\SuperAdmin;
use App\Repositories\EloquentRepository;
use App\Repositories\SuperAdmins\Contracts\SuperAdminsRepositoryContract;

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
}
