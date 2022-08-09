<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer;

use App\Models\CustomerGender;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Customer\Contracts\CustomerGendersRepositoryContract;
use App\Repositories\Resources\Customer\Events\Genders\AfterCreate;
use App\Repositories\Resources\Customer\Events\Genders\AfterUpdate;
use App\Repositories\Resources\Customer\Events\Genders\BeforeCreate;
use App\Repositories\Resources\Customer\Events\Genders\BeforeUpdate;
use App\Repositories\Resources\Customer\Promoters\Genders\GendersPromoterTrait;
use App\Repositories\Resources\Customer\PropertyHandlers\GendersPropertyHandlerTrait;

class GendersRepository extends EloquentRepository implements CustomerGendersRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use GendersPromoterTrait;
	use GeneralPromoterTrait;
	use GendersPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = CustomerGender::class;
}
