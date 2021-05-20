<?php

declare(strict_types=1);

namespace App\Factory\Logger;

use App\Exceptions\Exception;
use App\Repositories\Repository;
use App\Factory\Logger\Interfaces\LoggerInterface;

/**
 * Class Logger
 * @package App\Factory\Logger
 */
class DatabaseLogger extends LoggerManager implements LoggerInterface
{
    /**
     * insert log data into database table
     *
     * @param array $data
     * @return array|object
     */
    public function make(array $data = []) : array|object
    {
        try {
            return Repository::logger()->create([$data]);
        }
        catch (\Exception $e){
            return Exception::accessLoggerException($e->getMessage());
        }
    }
}
