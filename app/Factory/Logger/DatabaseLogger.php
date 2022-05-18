<?php

declare(strict_types=1);

namespace App\Factory\Logger;

use App\Exceptions\Exception;
use App\Factory\Logger\Interfaces\LoggerInterface;
use App\Repositories\Repository;

/**
 * Class Logger
 * @package App\Factory\Logger
 */
class DatabaseLogger extends LoggerManager implements LoggerInterface
{
    /**
     * @var array
     */
    protected array $binds = [];

    /**
     * DatabaseLogger constructor.
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * insert log data into database table
     *
     * @param array $data
     * @return array|object
     */
    public function create(array $data = []): array|object
    {
        try {
            return Repository::logger()->create([$data]);
        } catch (\Exception $e) {
            return Exception::accessLoggerException($e->getMessage());
        }
    }
}
