<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Exceptions\Exception;

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
        if(property_exists($this,'localization') && count($this->localization)){
            $with = request()->query->get('with',[]);
            request()->query->set('with',array_merge($with,['localization' => 'values']));
        }

        $call =  call_user_func($callback);

        return $this->addCollectDataToResource(function(array $collect = []) use($call){
            $result = array_merge($collect,$call->pagination());
            $result['data'] = $this->resourcePropagation($result['data']);

            return $result;
        });
    }

    /**
     * get resource collection for repository
     *
     * @param callable $callback
     * @return mixed
     */
    public function addCollectDataToResource(callable $callback) : mixed
    {
        $list  = [];
        $collectRequest = request()->query->get('collect');

        if(is_string($collectRequest)){
            $collectArray = explode(',',$collectRequest);
            foreach ($collectArray as $collect){
                if(
                    property_exists($this,'collects')
                    && in_array($collect,$this->collects,true)
                ){
                    $list['collects'][$collect] = $this->graphQl->get()->sum($collect);
                }
                else{
                    return Exception::customException(trans('exception.resourceCollection'));
                }
            }
        }

        return call_user_func($callback,$list);
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

        foreach ($data as $key => $item){
            $values = $item['localization']['values'][0] ?? [];

            foreach ($withValues as $withValue){
                foreach (($item[$withValue] ?? []) as $withKey => $withData){
                    if(isset($withData['localization'])){
                        $item[$withValue][$withKey] = ($this->resourcePropagation(
                                [$withData],
                                $this->findRepositoryByModel($withValue)
                            )[0]) ?? [];
                    }
                }

            }

            foreach ($localizations as $localization){
                $item[$localization] = $values[$localization] ?? ($item[$localization] ?? null);
                unset($item['localization']);
            }

            $list[$key] = $this->resourceHandler($item,function(object $resource) use($item){
                return $resource->handle($item);
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
    public function resourceHandler(array $data,callable $callback) : array
    {
        $resource = $this->getResource();

        if(class_exists($resource)){
            if(is_null(static::$resourceInstance)){
                static::$resourceInstance = new $resource;
            }
        }

        return (is_null(static::$resourceInstance)) ? $data : call_user_func($callback,static::$resourceInstance);
    }


}
