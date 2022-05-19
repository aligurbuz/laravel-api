<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Logger;

use App\Models\AccessLogger;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;
use App\Repositories\Resources\Logger\Events\Logger\AfterCreate;
use App\Repositories\Resources\Logger\Events\Logger\AfterUpdate;
use App\Repositories\Resources\Logger\Events\Logger\BeforeCreate;
use App\Repositories\Resources\Logger\Events\Logger\BeforeUpdate;
use App\Repositories\Resources\Logger\Promoters\Logger\LoggerPromoterTrait;
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
    use LoggerPromoterTrait;
    use GeneralPromoterTrait;
    use LoggerPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = AccessLogger::class;
}
