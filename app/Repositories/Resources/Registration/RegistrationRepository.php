<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Registration;

use App\Models\Registration;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Registration\Events\Registration\AfterCreate;
use App\Repositories\Resources\Registration\Events\Registration\AfterUpdate;
use App\Repositories\Resources\Registration\Events\Registration\BeforeCreate;
use App\Repositories\Resources\Registration\Events\Registration\BeforeUpdate;
use App\Repositories\Resources\Registration\Contracts\RegistrationRepositoryContract;
use App\Repositories\Resources\Registration\PropertyHandlers\RegistrationPropertyHandlerTrait;

class RegistrationRepository extends EloquentRepository implements RegistrationRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use RegistrationPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Registration::class;

	/**
	 * get auto RegistrationRepository scope method
	 *
	 * @param object|null $builder
	 * @return object
	 */
	public function registrationRepository(?object $builder = null): object
	{
		return $this->apply($builder);
	}
}
