<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Countries;

use App\Models\Country;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Countries\Events\Countries\AfterCreate;
use App\Repositories\Resources\Countries\Events\Countries\AfterUpdate;
use App\Repositories\Resources\Countries\Events\Countries\BeforeCreate;
use App\Repositories\Resources\Countries\Events\Countries\BeforeUpdate;
use App\Repositories\Resources\Countries\Contracts\CountriesRepositoryContract;
use App\Repositories\Resources\Countries\PropertyHandlers\CountriesPropertyHandlerTrait;

/**
 * Class CountriesRepository
 * @package App\Repositories\Resources\Countries
 */
class CountriesRepository extends EloquentRepository implements CountriesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use CountriesPropertyHandlerTrait;

    /**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Country::class;

    /**
     * get auto CountriesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
	public function countriesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}
}
