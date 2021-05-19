<?php

namespace App\Factory\Logger;

use App\Services\MongoDb;
use App\Exceptions\Exception;
use App\Factory\Logger\Interfaces\LoggerInterface;

/**
 * Class Logger
 * @package App\Factory\Logger
 */
class MongoDbLogger extends LoggerManager implements LoggerInterface
{
    /**
     * insert log data into database table
     *
     * @param array $data
     * @return object
     */
    public function make(array $data = []) : object
    {
        $mongoDbConnection = MongoDb::connection();

        if($mongoDbConnection->isSuccess()){
            try {
                return $mongoDbConnection->write('logger',$data);
            }
            catch (\Exception $e){
                return Exception::accessLoggerException($e->getMessage());
            }
        }

        return $mongoDbConnection;
    }
}
