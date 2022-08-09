<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Ages;

use App\Models\Entities\CustomerAge;

trait AgesPromoterTrait
{
	/**
	 * get auto AgesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function agesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return CustomerAge
	 */
	public function entity(): CustomerAge
	{
		return parent::entity();
	}
}
