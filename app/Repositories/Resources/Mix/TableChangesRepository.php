<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Mix;

use App\Models\TableChange;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Mix\Contracts\TableChangesRepositoryContract;

class TableChangesRepository extends EloquentRepository implements TableChangesRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = TableChange::class;

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
	 * get auto TableChangesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function tableChangesRepository(?object $builder = null): object
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
