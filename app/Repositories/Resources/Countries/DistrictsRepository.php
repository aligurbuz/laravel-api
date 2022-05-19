<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Countries;

use App\Models\District;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Countries\Contracts\DistrictsRepositoryContract;
use App\Repositories\Resources\Countries\Events\District\AfterCreate;
use App\Repositories\Resources\Countries\Events\District\AfterUpdate;
use App\Repositories\Resources\Countries\Events\District\BeforeCreate;
use App\Repositories\Resources\Countries\Events\District\BeforeUpdate;
use App\Repositories\Resources\Countries\Promoters\Districts\DistrictsPromoterTrait;
use App\Repositories\Resources\Countries\PropertyHandlers\DistrictPropertyHandlerTrait;

class DistrictsRepository extends EloquentRepository implements DistrictsRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use GeneralPromoterTrait;
    use DistrictsPromoterTrait;
    use DistrictPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = District::class;
}
