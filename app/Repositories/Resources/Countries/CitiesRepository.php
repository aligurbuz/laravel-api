<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Countries;

use App\Models\City;
use App\Repositories\Resources\Countries\Contracts\CitiesRepositoryContract;
use App\Repositories\EloquentRepository;

class CitiesRepository extends EloquentRepository implements CitiesRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = City::class;

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
	 * get auto CitiesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function citiesRepository(?object $builder = null): object
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
