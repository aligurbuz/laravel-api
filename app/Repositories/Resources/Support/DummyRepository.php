<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support;

use App\Models\Dummy;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Support\Contracts\SupportDummyRepositoryContract;
use App\Repositories\Resources\Support\Events\Dummy\AfterCreate;
use App\Repositories\Resources\Support\Events\Dummy\AfterUpdate;
use App\Repositories\Resources\Support\Events\Dummy\BeforeCreate;
use App\Repositories\Resources\Support\Events\Dummy\BeforeUpdate;
use App\Repositories\Resources\Support\Promoters\Dummy\DummyPromoterTrait;
use App\Repositories\Resources\Support\PropertyHandlers\DummyPropertyHandlerTrait;

class DummyRepository extends EloquentRepository implements SupportDummyRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use DummyPromoterTrait;
    use GeneralPromoterTrait;
    use DummyPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Dummy::class;
}
