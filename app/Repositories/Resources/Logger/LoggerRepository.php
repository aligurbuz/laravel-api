<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Logger;

use App\Models\AccessLogger;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;
use App\Repositories\Resources\Logger\Events\Logger\AfterCreate;
use App\Repositories\Resources\Logger\Events\Logger\AfterUpdate;
use App\Repositories\Resources\Logger\Events\Logger\BeforeCreate;
use App\Repositories\Resources\Logger\Events\Logger\BeforeUpdate;
use App\Repositories\Resources\Logger\PropertyHandlers\LoggerPropertyHandlerTrait;

/**
 * Class LoggerRepository
 * @package App\Repositories\Resources\Logger
 */
class LoggerRepository extends EloquentRepository implements LoggerRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use LoggerPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = AccessLogger::class;

    /**
     * get auto loggerRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function loggerRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }
}
