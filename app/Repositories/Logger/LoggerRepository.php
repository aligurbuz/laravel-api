<?php

namespace App\Repositories\Logger;

use App\Models\AccessLogger;
use App\Repositories\EloquentRepository;
use App\Repositories\Logger\Contracts\LoggerRepositoryContract;

class LoggerRepository extends EloquentRepository implements LoggerRepositoryContract
{
	protected static string $model = AccessLogger::class;
}
