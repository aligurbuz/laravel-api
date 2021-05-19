<?php

namespace App\Factory\Logger;

use App\Exceptions\Exception;
use App\Models\AccessLogger as Logger;
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
     * @return object
     */
    public function make(array $data = []) : object
    {
        try {
            return Logger::create($data);
        }
        catch (\Exception $e){
            return Exception::accessLoggerException($e->getMessage());
        }
    }
}
