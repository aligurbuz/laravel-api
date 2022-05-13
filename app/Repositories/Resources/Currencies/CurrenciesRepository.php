<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Currencies;

use App\Models\Currency;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Currencies\Events\Currencies\AfterCreate;
use App\Repositories\Resources\Currencies\Events\Currencies\AfterUpdate;
use App\Repositories\Resources\Currencies\Events\Currencies\BeforeCreate;
use App\Repositories\Resources\Currencies\Events\Currencies\BeforeUpdate;
use App\Repositories\Resources\Currencies\Contracts\CurrenciesRepositoryContract;
use App\Repositories\Resources\Currencies\PropertyHandlers\CurrenciesPropertyHandlerTrait;

class CurrenciesRepository extends EloquentRepository implements CurrenciesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use CurrenciesPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Currency::class;

	/**
	 * get auto CurrenciesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function currenciesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}
}
