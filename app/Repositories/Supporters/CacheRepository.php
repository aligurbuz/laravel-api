<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Constants;
use App\Exceptions\Exception;
use App\Factory\Cache\Interfaces\CacheInterface;
use App\Factory\Factory;
use App\Libs\Client;
use App\Libs\Db;
use App\Models\Features\ScopeManagerTrait;
use Closure;
use Illuminate\Support\Str;

/**
 * Trait CacheRepository
 * @package App\Repositories\Executors
 */
trait CacheRepository
{
    use ScopeManagerTrait;

    /**
     * @var int
     */
    protected int $cacheExpire = 600;

    /**
     * @var array
     */
    protected array $exceptClientData = ['client_date', 'client_time'];

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
     * make cache model data for repository
     *
     * @param callable $callback
     * @return array
     */
    public function useProxyCache(callable $callback): array
    {
        $this->proxyUsing = true;

        return $this->cacheCondition($callback, function () use ($callback) {
            return $this->proxyUsing ? $this->proxy($callback) : $callback();
        });
    }

    /**
     * get cache condition for eloquent repository model
     *
     * @param callable $callback
     * @param callable $returnCallback
     * @return mixed
     */
    public function cacheCondition(callable $callback, callable $returnCallback): mixed
    {
        if ($this->checkCacheStatus()) {
            $this->setProperties();

            return $this->cacheHandler($callback, function ($proxy) {
                return $proxy;
            });
        }

        return $returnCallback();
    }

    /**
     * get checkCacheStatus for repository
     *
     * @return bool
     */
    private function checkCacheStatus(): bool
    {
        return (!property_exists($this, 'setCache')) ? config('repository.repositoryCache') : $this->setCache;
    }

    /**
     * set property value for cache repository
     *
     * @return void
     */
    private function setProperties(): void
    {
        $this->rangeContainer($this);
        $this->relationContainer($this->getModelWithQueries());

        $requestQuery = request()->query->all();

        foreach ($this->exceptClientData as $exceptClientData) {
            if (isset($requestQuery[$exceptClientData])) {
                unset($requestQuery[$exceptClientData]);
            }
        }

        $this->cacheKey = $this->generateCacheKey();
        $this->cacheInstance = Factory::cache(['adapter' => 'redis', 'connection' => config('repository.repositoryCacheConnection')]);
        $this->cacheTag = $this->cacheTag ?? Client::fingerPrint($requestQuery);
    }

    /**
     * it generates the hashed key for cache
     *
     * @param string|null $model
     * @return string
     */
    public function generateCacheKey(?string $model = null): string
    {
        $getModel = ($model ?? $this->getModelName());

        if (method_exists($this, 'getCacheKey')) {
            return $this->getCacheKey($getModel);
        }

        return $this->specificCacheKey($getModel);
    }

    /**
     * generate specific cache key for repository
     *
     * @param string $model
     * @return string
     */
    public function specificCacheKey(string $model): string
    {
        return $model;
    }

    /**
     * get redis process for repository cache
     *
     * @param callable $data
     * @param callable $callback
     * @return array
     */
    private function cacheHandler(callable $data, callable $callback): array
    {
        return $this->cacheInstance->hget(
            $this->cacheKey,
            (string)$this->cacheTag,
            $this->setCacheRepository($data, $callback)
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
        return function () use ($data, $callback) {
            $callData = $data();
            $proxy = $proxyCallback = $this->proxyUsing ? $this->proxy($callData) : $callData;

            if (
                isset($callData['data'])
                && is_array($callData['data'])
                && count($callData['data'])
            ) {
                $proxyCallback['cache'] = 'true';

                $this->cacheInstance->hset(
                    $this->cacheKey,
                    (string)$this->cacheTag,
                    json_encode($proxyCallback)
                );

                $this->cacheInstance->expire($this->cacheKey, $this->cacheExpire);
            }

            return $callback($proxy);
        };
    }

    /**
     * make cache model data for repository
     *
     * @param callable $callback
     * @return array
     */
    public function useCache(callable $callback): array
    {
        $this->proxyUsing = false;

        if ((
                property_exists($this, 'cache')
                && is_bool($this->cache)
                && !$this->cache)
            || (page() > 1)
        ) {
            return $callback();
        }

        return $this->cacheCondition($callback, function () use ($callback) {
            return $this->proxyUsing ? $this->proxy($callback) : $callback();
        });
    }

    /**
     * set cache tag for repository model
     *
     * @param mixed $tag
     */
    public function setCacheTag(mixed $tag): void
    {
        $this->cacheTag = $tag;
    }

    /**
     * delete cache for model
     *
     * @return void
     */
    public function deleteCache(): void
    {
        if ($this->checkCacheStatus()) {
            $this->setProperties();

            $model = $this->getModelName();
            $cacheKey = $this->cacheKey;

            if ($this->cacheInstance->exists($cacheKey) && !$this->cacheInstance->delete($cacheKey)) {
                Exception::cacheException();
            }

            if ($model !== 'Localization') {
                $this->deleteRelationCache($model);
            }
        }
    }

    /**
     * get checkCacheMemoryStatus for repository
     *
     * @return bool
     */
    private function checkCacheMemoryStatus(): bool
    {
        return config('repository.repositoryMemoryCache');
    }

    /**
     * delete relation cache for repository model
     *
     * @param string $model
     * @param bool $recursive
     */
    private function deleteRelationCache(string $model, bool $recursive = true): void
    {
        $relations = Db::relations();

        if (isset($relations[$model]) && is_array($relations[$model])) {
            $globalScopes = config('repository.globalScopes');

            foreach ($relations[$model] as $relation) {
                $relationModelNamespace = Constants::modelNamespace . '\\' . $relation;

                if (class_exists($relationModelNamespace)) {
                    $relationModelNamespaceInstance = new $relationModelNamespace;
                    $relationDeniedLists = $relationModelNamespaceInstance->getRepository()->getDeniedEagerLoadings();

                    if (in_array(Str::camel($model), $relationDeniedLists, true)) {
                        continue;
                    }
                }
                $camelCaseTableCode = Str::camel(getTableCode($relation));

                if (!in_array($camelCaseTableCode, $globalScopes, true)) {
                    $relationHash = $this->generateCacheKey($relation);

                    if ($this->cacheInstance->exists($relationHash) && !$this->cacheInstance->delete($relationHash)) {
                        Exception::cacheException();
                    }

                    if ($recursive && isset($relations[$relation]) && $relation !== 'Localization') {
                        $this->deleteRelationCache($relation, false);
                    }
                }
            }
        }
    }
}
