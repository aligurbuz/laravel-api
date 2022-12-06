<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Password\Promoters\Changes;

use App\Models\Entities\PasswordChange;

trait ChangesPromoterTrait
{
	/**
	 * get auto ChangesRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function changesRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return PasswordChange
	 */
	public function entity(): PasswordChange
	{
		return parent::entity();
	}
}
