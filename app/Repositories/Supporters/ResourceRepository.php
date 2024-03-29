<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Exceptions\Exception;
use App\Libs\AppContainer;
use Illuminate\Support\Str;

/**
 * Trait LocalizationRepository
 * @package App\Repositories\Executors
 */
trait ResourceRepository
{
    /**
     * @var array
     */
    protected static array $resourceInstance = [];

    /**
     * @var string
     */
    protected string $resourceMethod = 'handle';

    /**
     * get current namespace for repository
     *
     * @return string
     */
    public function getCurrentNamespace(): string
    {
        return static::class;
    }

    /**
     * get resource for repository
     *
     * @param callable $callback
     * @return array
     */
    public function resource(callable $callback): array
    {
        $call = $callback();

        return $this->addCollectDataToResource(function (array $collect = []) use ($call) {
            $result = array_merge($collect, $call->pagination());
            if (isset($result['links'])) {
                unset($result['links']);
            }


            $result = !isset($result['data']) ? ['data' => $result] : $result;


            if (isset($result['data']) && !request()->query->has('source')) {
                $result['data'] = $this->resourcePropagation($result['data']);
            }

            if ($call->filterModelCode()) {
                $result['total'] = count($result['data']);
                AppContainer::terminate('filterModelCode');
            }

            if (method_exists($this, 'appends')) {
                $appends = $this->appends();

                if (method_exists($this, 'globalAppends')) {
                    $appends = array_merge($this->globalAppends(), $this->appends());
                }

                return $this->source(array_merge($result, $appends));
            }

            return $this->source($result);
        });
    }

    /**
     * get resource collection for repository
     *
     * @param callable $callback
     * @return mixed
     */
    public function addCollectDataToResource(callable $callback): mixed
    {
        $list = [];
        $collectRequest = request()->query('collect');

        if (is_string($collectRequest)) {
            $collectArray = explode(',', $collectRequest);
            foreach ($collectArray as $collect) {
                if (
                    property_exists($this, 'collects')
                    && in_array($collect, $this->collects, true)
                ) {
                    $list['collects'][$collect] = $this->graphQl->get()->sum($collect);
                } else {
                    return Exception::customException(trans('exception.resourceCollection'));
                }
            }
        }

        return $callback($list);
    }

    /**
     * get resource for repository model
     *
     * @param array $data
     * @param object|null $repository
     * @param bool $localizationHandler
     * @param bool $recursive
     * @return array
     */
    public function resourcePropagation(array $data = [], ?object $repository = null, bool $localizationHandler = true, bool $recursive = false): array
    {
        $list = [];

        if ($localizationHandler) {
            $repository = $repository ?? $this;

            if ($recursive) {
                AppContainer::set('resourcePropagationRepository', $repository);
            }

            $localizations = $this->getLocalizations($repository);
            $withValues = $repository->getModelWithValues();
        }

        foreach ($data as $key => $item) {
            if ($localizationHandler) {
                $values = $item['localization']['values'][0] ?? [];

                foreach ($withValues as $withValue) {
                    $withValueSnake = Str::snake($withValue);
                    $itemRelations = ($item[$withValueSnake] ?? []);
                    foreach ($itemRelations as $withKey => $withData) {
                        if (isset($withData['localization'])) {
                            $item[$withValueSnake][$withKey] = ($this->resourcePropagation(
                                [$withData],
                                $this->findRepositoryByModel(getModelWithPlural($withValue)),
                                true,
                                true
                            )[0]) ?? [];
                        }

                        if (is_array($withData)) {
                            foreach ($withData as $withDataKey => $withDatum) {
                                $withDataKeyPrefix = $withDataKey . '_code';
                                if (isset($withData[$withDataKeyPrefix]) && is_array($withDatum) && count($withDatum)) {
                                    $withDataModel = Str::camel($withDataKey);
                                    if (isset($item[$withValueSnake][$withKey][$withDataKey]) && is_array($item[$withValueSnake][$withKey][$withDataKey])) {
                                        foreach ($item[$withValueSnake][$withKey][$withDataKey] as $recursiveKey => $recursiveVal) {
                                            if (isset($recursiveVal['localization'])) {
                                                $item[$withValueSnake][$withKey][$withDataKey][$recursiveKey] = ($this->resourcePropagation(
                                                    [$recursiveVal],
                                                    $this->findRepositoryByModel($withDataModel),
                                                    true,
                                                    true
                                                )[0]) ?? [];
                                            }
                                        }
                                    }

                                }
                            }
                        }
                    }

                }

                foreach ($localizations as $localization) {
                    $item[$localization] = $values[$localization] ?? ($item[$localization] ?? null);
                    unset($item['localization']);
                }
            }

            $list[$key] = $this->resourceHandled($item);
        }

        return $list;
    }

    /**
     * get resource handled for resource repository
     *
     * @param array $item
     * @return array
     */
    public function resourceHandled(array $item = []): array
    {
        return $this->resourceHandler($item, function (object $resource) use ($item) {
            $item = $this->getItemAttributes($resource, $item);
            return (method_exists($resource, $this->resourceMethod)) ? $resource->{$this->resourceMethod}($item) : $item;
        });
    }

    /**
     * get resource handler for repository
     *
     * @param array $data
     * @param callable $callback
     * @return array
     */
    public function resourceHandler(array $data, callable $callback): array
    {
        $resource = $this->getResource();

        if (class_exists($resource) && !isset(static::$resourceInstance[$resource])) {
            static::$resourceInstance[$resource] = new $resource;
        }

        return (!isset(static::$resourceInstance[$resource])) ? $data : $callback(static::$resourceInstance[$resource]);
    }

    /**
     * get resource for model
     *
     * @return string
     */
    public function getResource(): string
    {
        //base class property for repository
        if (AppContainer::has('resourcePropagationRepository')) {
            $resourcePropagationRepository = AppContainer::get('resourcePropagationRepository');
            $className = class_basename($resourcePropagationRepository);
            $currentNamespace = get_class($resourcePropagationRepository);
        } else {
            $className = class_basename(static::class);
            $currentNamespace = static::class;
        }

        AppContainer::terminate('resourcePropagationRepository');

        //get directory name for repository model
        $dir = str_replace('\\' . $className, '', $currentNamespace);

        return $dir . '\Resource\\' . str_replace('Repository', '', $className) . 'Resource';
    }

    /**
     * get item attributes for resource repository
     *
     * @param object $resource
     * @param mixed $item
     * @return mixed
     */
    public function getItemAttributes(object $resource, mixed $item): mixed
    {
        if (property_exists($resource, 'attributes') && is_array($resource->attributes)) {
            foreach ($resource->attributes as $attribute) {
                clientAttribute($attribute, static function () use ($attribute, $resource, &$item) {
                    if (method_exists($resource, $camelAttribute = Str::camel($attribute))) {
                        $attributeHandler = $resource->$camelAttribute($item);
                        if (is_null($attributeHandler)) {
                            unset($item[$attribute]);
                        } else {
                            $item[$attribute] = $attributeHandler;
                        }
                    }
                });
            }
        }
        return $item;
    }

    /**
     * get source value for eloquent repository
     *
     * @param array $result
     * @return array
     */
    public function source(array $result = []): array
    {
        if (request()->query->has('source')) {
            $source = request()->query->get('source');
            $relationData = $this->getTable();

            if (isset($result['data'])) {
                foreach ($result['data'] as $key => $value) {
                    if (isset($value[$source][0])) {
                        $result['data'][$key] = $value[$source][0];
                        unset($value[$source]);
                        $result['data'][$key][$relationData] = [$value];
                    } else {
                        Exception::customException('notSource', ['key' => $key]);
                    }
                }
            }
        }

        if (isset($result['data'])) {
            $result['data'] = $this->resourcePropagation($result['data']);
        }

        return $result;
    }

    /**
     * get base resource for repository
     *
     * @param array $data
     * @return array
     */
    public function baseResource(array $data = []): array
    {
        return $this->addCollectDataToResource(function (array $collect = []) use ($data) {
            $result = array_merge($collect, $data);
            return $this->resourcePropagation($result);
        });
    }

    /**
     * get localization process for repository
     *
     * @param array $data
     * @param string $methodName
     * @return array
     */
    public function additionalResource(array $data, string $methodName): array
    {
        $this->resourceMethod = $methodName;
        if (isset($data['data'])) {
            $data['data'] = $this->resourcePropagation(($data['data'] ?? []), null, false);
        } else {
            $data = $this->resourcePropagation($data, null, false);
        }

        return $data;
    }


}
