<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Customer;

use App\Models\CustomerContact;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Customer\Contracts\CustomerContactsRepositoryContract;
use App\Repositories\Resources\Customer\Events\Contacts\AfterCreate;
use App\Repositories\Resources\Customer\Events\Contacts\AfterUpdate;
use App\Repositories\Resources\Customer\Events\Contacts\BeforeCreate;
use App\Repositories\Resources\Customer\Events\Contacts\BeforeUpdate;
use App\Repositories\Resources\Customer\Promoters\Contacts\ContactsPromoterTrait;
use App\Repositories\Resources\Customer\PropertyHandlers\ContactsPropertyHandlerTrait;

class ContactsRepository extends EloquentRepository implements CustomerContactsRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use ContactsPromoterTrait;
	use GeneralPromoterTrait;
	use ContactsPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = CustomerContact::class;
}
