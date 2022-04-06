<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Support;

use App\Models\Excel;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Support\Contracts\ExcelRepositoryContract;
use App\Repositories\Resources\Support\Events\Excel\AfterCreate;
use App\Repositories\Resources\Support\Events\Excel\AfterUpdate;
use App\Repositories\Resources\Support\Events\Excel\BeforeCreate;
use App\Repositories\Resources\Support\Events\Excel\BeforeUpdate;

class ExcelRepository extends EloquentRepository implements ExcelRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Excel::class;

	/**
	 * get client ranges for repository
	 *
	 * @var array|string[]
	 */
	protected array $ranges = [];

	/**
	 * localization values for repository
	 *
	 * @var array|string[]
	 */
	protected array $localization = [];

	/**
	 * hitter values for repository
	 *
	 * @var array|string[]
	 */
	protected array $hitter = [];

	/**
	 * denied eager loadings values for repository
	 *
	 * @var array
	 */
	protected array $deniedEagerLoadings = [];

	/**
	 * get auto eager loading values for repository
	 *
	 * @var array
	 */
	protected array $autoEagerLoadings = [];

	/**
	 * it contains columns to be used by groupBy method.
	 *
	 * @var array
	 */
	protected array $groupByFields = [];

	/**
	 * it contains aggregate methods to be used together groupBy method.
	 *
	 * @var array
	 */
	protected array $groupByProcessFields = [];

	/**
	 * get additional resource for repository
	 *
	 * @var bool
	 */
	protected bool $additionalResource = false;

	/**
	 * add post query for repository
	 *
	 * @var array
	 */
	protected array $addPostQueries = [];


	/**
	 * get auto ExcelRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function excelRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}
}
