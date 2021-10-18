<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Logger;

use App\Models\AccessLogger;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\Logger\Contracts\LoggerRepositoryContract;

/**
 * Class LoggerRepository
 * @package App\Repositories\Resources\Logger
 */
class LoggerRepository extends EloquentRepository implements LoggerRepositoryContract
{
	protected static string $model = AccessLogger::class;
}
