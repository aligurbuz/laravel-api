<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Countries;

use App\Models\City;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Countries\Events\Cities\AfterCreate;
use App\Repositories\Resources\Countries\Events\Cities\AfterUpdate;
use App\Repositories\Resources\Countries\Events\Cities\BeforeCreate;
use App\Repositories\Resources\Countries\Events\Cities\BeforeUpdate;
use App\Repositories\Resources\Countries\Contracts\CitiesRepositoryContract;
use App\Repositories\Resources\Countries\PropertyHandlers\CitiesPropertyHandlerTrait;

class CitiesRepository extends EloquentRepository implements CitiesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use CitiesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = City::class;

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
}
