<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support;

use App\Models\Excel;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Support\Contracts\ExcelRepositoryContract;
use App\Repositories\Resources\Support\Events\Excel\AfterCreate;
use App\Repositories\Resources\Support\Events\Excel\AfterUpdate;
use App\Repositories\Resources\Support\Events\Excel\BeforeCreate;
use App\Repositories\Resources\Support\Events\Excel\BeforeUpdate;
use App\Repositories\Resources\Support\PropertyHandlers\ExcelPropertyHandlerTrait;

class ExcelRepository extends EloquentRepository implements ExcelRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use ExcelPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Excel::class;

    /**
     * get auto ExcelRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function excelRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
