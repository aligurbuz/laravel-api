<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Timezones;

use App\Models\Timezone;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Timezones\Contracts\TimezonesRepositoryContract;

class TimezonesRepository extends EloquentRepository implements TimezonesRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Timezone::class;

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
	 * get auto TimezonesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function timezonesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * the fired event after create method for repository
	 *
	 * @param array $result
	 * @return void
	 */
	public function eventFireAfterCreate(array $result = []): void
	{
		//
	}


	/**
	 * the fired event after update method for repository
	 *
	 * @param array $result
	 * @return void
	 */
	public function eventFireAfterUpdate(array $result = []): void
	{
		//
	}
}
