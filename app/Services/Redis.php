<?php

namespace App\Services;

use Predis\Client;
use Predis\ClientInterface;

class Redis
{
    /**
     * redis instance value
     *
     * @var null|ClientInterface
     */
    protected static ?ClientInterface $redisInstance = null;

    /**
     * get predis client instance
     *
     * @return ClientInterface
     */
    public static function client(): ClientInterface
    {
        if(is_null(static::$redisInstance)){
            static::$redisInstance = new Client(config('database.redis.default'));
        }

        return static::$redisInstance;
    }
}
