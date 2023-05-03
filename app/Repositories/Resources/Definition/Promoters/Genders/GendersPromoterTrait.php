<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Definition\Promoters\Genders;

use App\Models\Entities\Gender;

trait GendersPromoterTrait
{
	/**
	 * get auto GendersRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function gendersRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}


	/**
	 * get entity for repository
	 *
	 * @return Gender
	 */
	public function entity(): Gender
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
}
