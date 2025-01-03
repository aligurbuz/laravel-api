<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\User;

use App\Models\UserPassword;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\User\Contracts\UserPasswordRepositoryContract;
use App\Repositories\Resources\User\Events\Password\AfterCreate;
use App\Repositories\Resources\User\Events\Password\AfterUpdate;
use App\Repositories\Resources\User\Events\Password\BeforeCreate;
use App\Repositories\Resources\User\Events\Password\BeforeUpdate;
use App\Repositories\Resources\User\Promoters\Password\PasswordPromoterTrait;
use App\Repositories\Resources\User\PropertyHandlers\PasswordPropertyHandlerTrait;

class PasswordRepository extends EloquentRepository implements UserPasswordRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use PasswordPromoterTrait;
	use GeneralPromoterTrait;
	use PasswordPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = UserPassword::class;
}
