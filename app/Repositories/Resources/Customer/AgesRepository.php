<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer;

use App\Models\CustomerAge;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Customer\Contracts\CustomerAgesRepositoryContract;
use App\Repositories\Resources\Customer\Events\Ages\AfterCreate;
use App\Repositories\Resources\Customer\Events\Ages\AfterUpdate;
use App\Repositories\Resources\Customer\Events\Ages\BeforeCreate;
use App\Repositories\Resources\Customer\Events\Ages\BeforeUpdate;
use App\Repositories\Resources\Customer\Promoters\Ages\AgesPromoterTrait;
use App\Repositories\Resources\Customer\PropertyHandlers\AgesPropertyHandlerTrait;

class AgesRepository extends EloquentRepository implements CustomerAgesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use AgesPromoterTrait;
    use GeneralPromoterTrait;
    use AgesPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = CustomerAge::class;
}
