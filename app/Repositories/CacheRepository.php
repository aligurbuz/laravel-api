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
     * @var CacheInterface|null
     */
    protected ?CacheInterface $cacheInstance = null;

    /**
     * @var bool
     */
    protected bool $proxyUsing = true;

    /**
     * @var mixed
     */
    protected mixed $cacheTag = null;

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
    public function useProxyCache(callable $callback) : array
    {
        $this->proxyUsing = true;

        return $this->cacheCondition($callback,function() use($callback){
            return $this->proxyUsing ? $this->proxy($callback) : call_user_func($callback);
        });
    }

    /**
     * make cache model data for repository
     *
     * @param callable $callback
     * @return array
     */
    public function useCache(callable $callback) : array
    {
        $this->proxyUsing = false;

        return $this->cacheCondition($callback,function() use($callback){
            return $this->proxyUsing ? $this->proxy($callback) : call_user_func($callback);
        });
    }

    /**
     * set cache tag for repository model
     *
     * @param mixed $tag
     */
    public function setCacheTag(mixed $tag) : void
    {
        $this->cacheTag = $tag;
    }

    /**
     * get cache condition for eloquent repository model
     *
     * @param callable $callback
     * @param callable $returnCallback
     * @return mixed
     */
    public function cacheCondition(callable $callback,callable $returnCallback): mixed
    {
        if(true === config('cache.repository_cache')){
            $this->setProperties();

            return $this->cacheHandler($callback,function($proxy){
                return $proxy;
            });
        }

        return call_user_func($returnCallback);
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
        $this->cacheTag           = $this->cacheTag ?? Client::fingerPrint(false);
    }

    /**
     * get redis process for repository cache
     *
     * @param callable $data
     * @param callable $callback
     * @return array
     */
    private function cacheHandler(callable $data,callable $callback) : array
    {
        return $this->cacheInstance->hget(
            $this->cacheKey,
            (string)$this->cacheTag,
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
            $proxy = $proxyCallback = $this->proxyUsing ? $this->proxy($callData) : $callData;
            $proxyCallback['cache'] = 'true';

            $this->cacheInstance->hset(
                $this->cacheKey,
                (string)$this->cacheTag,
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
            $this->deleteRelationCache($relations,$model);
        }
    }

    /**
     * delete relation cache for repository model
     *
     * @param array $relations
     * @param string $model
     * @param bool $recursive
     */
    private function deleteRelationCache(array $relations,string $model,bool $recursive = true)
    {
        foreach ($relations[$model] as $relation){
            $relationHash = $this->generateCacheKey($relation);

            if($this->cacheInstance->exists($relationHash)){
                if(!$this->cacheInstance->delete($relationHash)){
                    Exception::cacheException();
                }
            }

            if($recursive && isset($relations[$relation])){
                $this->deleteRelationCache($relations,$relation,false);
            }
        }
    }
}
