<?php 

namespace App\Repositories\Countries;

use App\Models\Country;
use App\Repositories\Countries\Contracts\CountriesRepositoryContract;
use App\Repositories\EloquentRepository;
use Illuminate\Database\Eloquent\Builder;

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
	 * @return object
	 */
	public function countriesRepository(): object
	{
		return $this->globalScope();
	}
}
