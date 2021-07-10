<?php

declare(strict_types=1);

namespace App\Repositories;

/**
 * Trait LocalizationRepository
 * @package App\Repositories
 */
trait ResourceRepository
{
    /**
     * @var object|null
     */
    protected static ?object $resourceInstance = null;

    /**
     * get resource for model
     *
     * @return string
     */
    public function getResource() : string
    {
        return __NAMESPACE__.'\\'.$this->getModelName().'\Resource\\'.$this->getModelName().'Resource';
    }

    /**
     * get localization process for repository
     *
     * @param callable $callback
     * @return array
     */
    public function resource(callable $callback) : array
    {
        if(property_exists($this,'localization')){
            $with = request()->query->get('with',[]);
            request()->query->set('with',array_merge($with,['localization' => 'values']));
        }

        $result =  call_user_func($callback);

        $result['data'] = $this->resourcePropagation($result['data']);
        return $result;
    }

    /**
     * get resource for repository model
     *
     * @param array $data
     * @param object|null $repository
     * @return array
     */
    public function resourcePropagation(array $data = [],?object $repository = null): array
    {
        $list           = [];
        $repository     = $repository ?? $this;
        $localizations  = $this->getLocalizations($repository);
        $withValues     = $repository->getModelWithValues();

        if(isset($data) && is_array($data)){
            foreach ($data as $key => $item){
                $values = $item['localization']['values'][0] ?? [];

                foreach ($withValues as $withValue){
                    if(isset($item[$withValue]['localization'])){
                        $item[$withValue] = ($this->resourcePropagation(
                                [$item[$withValue]],
                                $this->findRepositoryByModel($withValue)
                            )[0]) ?? [];
                    }
                }

                foreach ($localizations as $localization){
                    $item[$localization] = $values[$localization] ?? ($item[$localization] ?? null);
                    unset($item['localization']);
                }

                $list[$key] = $this->resourceHandler($item);
            }
        }

        return $list;
    }

    /**
     * get resource handler for repository
     *
     * @param array $data
     * @return array
     */
    public function resourceHandler(array $data = []) : array
    {
        $resource = $this->getResource();

        if(class_exists($resource)){
            if(is_null(static::$resourceInstance)){
                static::$resourceInstance = new $resource;
            }
        }

        return (is_null(static::$resourceInstance)) ? $data : static::$resourceInstance->handle($data);
    }


}
