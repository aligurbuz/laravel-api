<?php

declare(strict_types=1);

namespace App\Repositories\Logger;

use App\Models\AccessLogger;
use App\Repositories\EloquentRepository;
use App\Repositories\Logger\Contracts\LoggerRepositoryContract;

/**
 * Class LoggerRepository
 * @package App\Repositories\Logger
 */
class LoggerRepository extends EloquentRepository implements LoggerRepositoryContract
{
	protected static string $model = AccessLogger::class;
}
