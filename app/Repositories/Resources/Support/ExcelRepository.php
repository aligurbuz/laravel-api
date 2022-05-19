<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support;

use App\Models\Excel;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Support\Contracts\ExcelRepositoryContract;
use App\Repositories\Resources\Support\Events\Excel\AfterCreate;
use App\Repositories\Resources\Support\Events\Excel\AfterUpdate;
use App\Repositories\Resources\Support\Events\Excel\BeforeCreate;
use App\Repositories\Resources\Support\Events\Excel\BeforeUpdate;
use App\Repositories\Resources\Support\Promoters\Excel\ExcelPromoterTrait;
use App\Repositories\Resources\Support\PropertyHandlers\ExcelPropertyHandlerTrait;

class ExcelRepository extends EloquentRepository implements ExcelRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use ExcelPromoterTrait;
    use GeneralPromoterTrait;
    use ExcelPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Excel::class;
}
