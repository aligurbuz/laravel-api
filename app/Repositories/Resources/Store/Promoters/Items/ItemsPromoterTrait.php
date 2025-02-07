<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store\Promoters\Items;

use App\Models\Entities\Item;

trait ItemsPromoterTrait
{
	/**
	 * get auto ItemsRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function itemsRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return Item
	 */
	public function entity(): Item
	{
		return parent::entity();
	}


	/**
	 * Appends to the end of the returned data.
	 *
	 * @return array
	 */
	public function appends(): array
	{
		return [];
	}


	/**
	 * Create Process Failed.
	 *
	 * @return void
	 */
	public function createFailed(): void
	{
		//
	}


	/**
	 * Update Process Failed.
	 *
	 * @return void
	 */
	public function updateFailed(): void
	{
		//
	}
}
