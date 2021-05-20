<?php

declare(strict_types=1);

namespace App\Factory\Logger;

use App\Factory\Factory;
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
     * @return array|object
     */
    public function create(array $data = []) : array|object
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

        return Factory::logger(['adapter' => 'DatabaseLogger'])->create($data);
    }
}