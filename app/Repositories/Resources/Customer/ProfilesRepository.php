<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer;

use App\Models\Customer;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Customer\Contracts\CustomerProfilesRepositoryContract;
use App\Repositories\Resources\Customer\Events\Profiles\AfterCreate;
use App\Repositories\Resources\Customer\Events\Profiles\AfterUpdate;
use App\Repositories\Resources\Customer\Events\Profiles\BeforeCreate;
use App\Repositories\Resources\Customer\Events\Profiles\BeforeUpdate;
use App\Repositories\Resources\Customer\Promoters\Profiles\ProfilesPromoterTrait;
use App\Repositories\Resources\Customer\PropertyHandlers\ProfilesPropertyHandlerTrait;

class ProfilesRepository extends EloquentRepository implements CustomerProfilesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use ProfilesPromoterTrait;
    use GeneralPromoterTrait;
    use ProfilesPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Customer::class;


}
