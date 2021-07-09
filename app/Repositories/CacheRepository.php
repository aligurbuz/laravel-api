<?php

declare(strict_types=1);

namespace App\Repositories;

use Closure;
use App\Services\Db;
use App\Factory\Factory;
use App\Services\Client;
use App\Exceptions\Exception;
use App\Factory\Cache\Interfaces\CacheInterface;

/**
 * Trait CacheRepository
 * @package App\Repositories
 */
trait CacheRepository
{
    /**
     * @var int
     */
    protected int $cacheExpire = 600;

    /**
     * @var string|null
     */
    protected ?string $cacheKey = null;

    /**
     * @var mixed|null
     */
    protected mixed $cacheFingerPrint = null;

    /**
     * @var CacheInterface|null
     */
    protected ?CacheInterface $cacheInstance = null;

    /**
     * it generates the hashed key for cache
     *
     * @param string|null $model
     * @return string
     */
    public function generateCacheKey(?string $model = null) : string
    {
        return $model ?? $this->getModelName();
    }

    /**
     * make cache model data for repository
     *
     * @param callable $callback
     * @return array
     */
    public function cacheHandler(callable $callback) : array
    {
        if(true === config('cache.repository_cache')){
            $this->setProperties();

            return $this->cache($callback,function($proxy){
                return $proxy;
            });
        }

        return $this->proxy($callback);
    }

    /**
     * set property value for cache repository
     *
     * @return void
     */
    private function setProperties() : void
    {
        $this->cacheKey           = $this->generateCacheKey();
        $this->cacheInstance      = Factory::cache();
        $this->cacheFingerPrint   = Client::fingerPrint(false);
    }

    /**
     * get redis process for repository cache
     *
     * @param callable $data
     * @param callable $callback
     * @return array
     */
    private function cache(callable $data,callable $callback) : array
    {
        return $this->cacheInstance->hget(
            $this->cacheKey,
            (string)$this->cacheFingerPrint,
            $this->setCacheRepository($data,$callback)
        );
    }

    /**
     * it makes cache data for eloquent
     *
     * @param callable $data
     * @param callable $callback
     * @return Closure
     */
    private function setCacheRepository(callable $data, callable $callback): Closure
    {
        return function() use($data,$callback)
        {
            $callData = call_user_func($data);
            $proxy = $proxyCallback = $this->proxy($callData);
            $proxyCallback['cache'] = 'true';

            $this->cacheInstance->hset(
                $this->cacheKey,
                (string)$this->cacheFingerPrint,
                json_encode($proxyCallback)
            );

            $this->cacheInstance->expire($this->cacheKey,$this->cacheExpire);

            return call_user_func($callback,$proxy);
        };
    }

    /**
     * delete cache for model
     *
     * @return void
     */
    public function deleteCache() : void
    {
        $this->setProperties();

        $model      = $this->getModelName();
        $cacheKey   = $this->cacheKey;
        $relations  = Db::relations();

        if($this->cacheInstance->exists($cacheKey)){
            if(!$this->cacheInstance->delete($cacheKey)){
                Exception::cacheException();
            }
        }

        if(isset($relations[$model]) && is_array($relations[$model])){
            foreach ($relations[$model] as $relation){
                $relationHash = $this->generateCacheKey($relation);

                if($this->cacheInstance->exists($relationHash)){
                    if(!$this->cacheInstance->delete($relationHash)){
                        Exception::cacheException();
                    }
                }
            }
        }
    }
}
