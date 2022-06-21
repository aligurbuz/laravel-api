<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Profiles;

trait ProfilesPromoterTrait
{
	/**
	 * get auto ProfilesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function profilesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}
}
