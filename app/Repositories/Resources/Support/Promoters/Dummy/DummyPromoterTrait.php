<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Support\Promoters\Dummy;

use App\Models\Entities\Dummy;

trait DummyPromoterTrait
{
	/**
	 * get auto DummyRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function dummyRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return Dummy
	 */
	public function entity(): Dummy
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
