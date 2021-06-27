<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Services\Redis;
use App\Services\Client;

/**
 * Trait CacheRepository
 * @package App\Repositories
 */
trait CacheRepository
{
    /**
     * make cache model data for repository
     *
     * @param callable $callback
     * @return array
     */
    public function cacheHandler(callable $callback) : array
    {
        return $this->redisProcessForRepositoryCache($callback,function($proxy){
            return $proxy;
        });
    }

    /**
     * get redis process for repository cache
     *
     * @param callable $data
     * @param callable $callback
     * @return array
     */
    public function redisProcessForRepositoryCache(callable $data,callable $callback) : array
    {
        $modelName = $this->getModelName();
        $fingerPrint = Client::fingerPrint(false);

        $redisInstance = Redis::client();

        $callData = call_user_func($data);

        if($redisInstance->hexists($modelName,$fingerPrint)){
            return json_decode($redisInstance->hget($modelName,$fingerPrint),true);
        }

        $proxy = $proxyCallback = $this->proxy($callData);
        $proxyCallback['cache'] = 'redis';

        $redisInstance->hset($modelName,$fingerPrint,json_encode($proxyCallback));

        return call_user_func($callback,$proxy);
    }
}
