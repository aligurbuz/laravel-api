<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Exceptions\Exception;
use App\Services\AppContainer;
use Illuminate\Support\Str;

/**
 * Trait LocalizationRepository
 * @package App\Repositories\Executors
 */
trait ResourceRepository
{
    /**
     * @var object|null
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
        return get_called_class();
    }

    /**
     * get resource for repository
     *
     * @param callable $callback
     * @return array
     */
    public function resource(callable $callback): array
    {
        $call = call_user_func($callback);

        return $this->addCollectDataToResource(function (array $collect = []) use ($call) {
            $result = array_merge($collect, $call->pagination());
            if (isset($result['links'])) {
                unset($result['links']);
            }

            if (isset($result['data'])) {
                $result['data'] = $this->resourcePropagation($result['data']);
            }

            return $result;
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

        return call_user_func($callback, $list);
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
                                if (is_array($withDatum) && count($withDatum) && isset($withData[$withDataKey . '_code'])) {
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

            $list[$key] = $this->resourceHandler($item, function (object $resource) use ($item) {

                $item = $this->getItem($resource, $item);

                return (method_exists($resource, $this->resourceMethod)) ? $resource->{$this->resourceMethod}($item) : $item;
            });
        }

        return $list;
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

        if (class_exists($resource)) {
            if (!isset(static::$resourceInstance[$resource])) {
                static::$resourceInstance[$resource] = new $resource;
            }
        }

        return (!isset(static::$resourceInstance[$resource])) ? $data : call_user_func($callback, static::$resourceInstance[$resource]);
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
            $className = class_basename(get_called_class());
            $currentNamespace = get_called_class();
        }

        AppContainer::terminate('resourcePropagationRepository');

        //get directory name for repository model
        $dir = str_replace('\\' . $className, '', $currentNamespace);

        return $dir . '\Resource\\' . str_replace('Repository', '', $className) . 'Resource';
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

    function getItem(object $resource, mixed $item): mixed
    {
        if (property_exists($resource, 'attributes') && is_array($resource->attributes)) {
            foreach ($resource->attributes as $attribute) {
                if (method_exists($resource, $attribute)) {
                    $attributeHandler = $resource->$attribute($item);
                    if (is_null($attributeHandler)) {
                        unset($item[$attribute]);
                    } else {
                        $item[$attribute] = $attributeHandler;
                    }
                }
            }
        }
        return $item;
    }


}
