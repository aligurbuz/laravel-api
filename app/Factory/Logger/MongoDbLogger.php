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
    public function create(array $data = []) : array|object
    {
        //We are making a mongoDb connection.
        $mongoDbConnection = MongoDb::connection();

        if(!$mongoDbConnection->isSuccess()){
            return Factory::logger(['adapter' => 'DatabaseLogger'])->create($data);
        }

        try {
            return $mongoDbConnection->write('logger',$data);
        }
        catch (\Exception $e){
            return Exception::accessLoggerException($e->getMessage());
        }
    }
}
