<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Countries;

use App\Models\Country;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Countries\Contracts\CountriesRepositoryContract;
use App\Repositories\Resources\Countries\Events\Countries\AfterCreate;
use App\Repositories\Resources\Countries\Events\Countries\AfterUpdate;
use App\Repositories\Resources\Countries\Events\Countries\BeforeCreate;
use App\Repositories\Resources\Countries\Events\Countries\BeforeUpdate;
use App\Repositories\Resources\Countries\Promoters\Countries\CountriesPromoterTrait;
use App\Repositories\Resources\Countries\PropertyHandlers\CountriesPropertyHandlerTrait;

/**
 * Class CountriesRepository
 * @package App\Repositories\Resources\Countries
 */
class CountriesRepository extends EloquentRepository implements CountriesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use GeneralPromoterTrait;
    use CountriesPromoterTrait;
    use CountriesPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Country::class;
}
