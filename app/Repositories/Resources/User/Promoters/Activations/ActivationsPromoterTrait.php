<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\User\Promoters\Activations;

trait ActivationsPromoterTrait
{
	/**
	 * get auto ActivationsRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function activationsRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}
}
