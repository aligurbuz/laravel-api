<?php 

declare(strict_types=1);

namespace App\Repositories\User;

use App\Models\UserPhoto;
use App\Repositories\EloquentRepository;
use App\Repositories\User\Contracts\PhotosRepositoryContract;

class PhotosRepository extends EloquentRepository implements PhotosRepositoryContract
{
	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = UserPhoto::class;

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
	protected array $localization = ['image_description', 'image_name'];

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
	 * get auto PhotosRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function photosRepository(?object $builder = null): object
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
