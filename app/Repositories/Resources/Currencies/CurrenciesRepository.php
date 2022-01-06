<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Currencies;

use App\Models\Currency;
use App\Repositories\Resources\Currencies\Contracts\CurrenciesRepositoryContract;
use App\Repositories\EloquentRepository;

class CurrenciesRepository extends EloquentRepository implements CurrenciesRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Currency::class;

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
	 * get auto CurrenciesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function currenciesRepository(?object $builder = null): object
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
}
