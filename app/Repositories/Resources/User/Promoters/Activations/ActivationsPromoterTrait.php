<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Promoters\Activations;

use App\Models\Entities\UserActivation;

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

    /**
     * get entity for repository
     *
     * @return UserActivation
     */
    public function entity(): UserActivation
    {
        return parent::entity();
    }
}
