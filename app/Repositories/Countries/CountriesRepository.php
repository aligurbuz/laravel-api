<?php

declare(strict_types=1);

namespace App\Repositories\Countries;

use App\Models\Country;
use App\Repositories\EloquentRepository;
use App\Repositories\Countries\Contracts\CountriesRepositoryContract;

/**
 * Class CountriesRepository
 * @package App\Repositories\Countries
 */
class CountriesRepository extends EloquentRepository implements CountriesRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Country::class;

	/**
	 * get client ranges for repository
	 *
	 * @var array|string[]
	 */
	protected array $ranges = [];


    /**
     * get auto CountriesRepository scope method
     * @param object|null $builder
     * @return object
     */
	public function countriesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}
}
