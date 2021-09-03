<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Exceptions\Exception;
use App\Repositories\Repository;
use App\Services\Client;
use Illuminate\Database\Eloquent\Builder;

/**
 * Trait withProcess
 * @property array withQuery
 * @property $this withSelects
 * @property $this hasValues
 * @property $this doesntHaveValues
 * @method $this checkSelectColumn(array $select = [], ?string $table = null)
 * @package App\Models\Features
 */
trait WithProcess
{
    /**
     * get eager loading data for model
     *
     * @param Builder $builder
     * @param array $with
     * @return object
     */
    public function withProcessHandler(Builder $builder,array $with = []): object
    {
        $params = request()->query->all();

        if(count($with)){
            $params['with'] = (count($with)) ? $with : ($params['with'] ?? []);
        }

        if(isset($params['with'])){
            $withQuery = $this->withQuery;

            if(is_array($params['with']) && count($params['with'])){
                foreach ($params['with'] as $with => $select){
                    $select = (is_array($select) && isset($select['select'])) ? $select['select'] : $select;

                    if(!is_string($select)){
                        return Exception::withSelectException();
                    }

                    if(
                    isset(
                        $withQuery[$with],
                        $withQuery[$with]['foreignColumn'],
                        $withQuery[$with]['localColumn'],
                        $withQuery[$with]['table']
                    )
                    ){
                        $localColumn        = $withQuery[$with]['localColumn'];
                        $foreignColumn      = $withQuery[$with]['foreignColumn'];
                        $foreignRepository  = $withQuery[$with]['repository'] ?? null;

                        $this->withSelects[] = $localColumn;

                        if(strlen($select)>0 && $select!=='*'){
                            $selectExplode = explode(',',$select);
                            $foreignRepositoryInstance = Repository::$foreignRepository();
                            $foreignRepositoryLocalization = $foreignRepositoryInstance->getLocalizations();

                            if(count($foreignRepositoryLocalization)){
                                $selectExplode[] = $foreignRepositoryInstance->getModelCode();
                            }

                            $selectExplode = $this->checkSelectColumn(
                                array_merge([$foreignColumn],$selectExplode)
                                ,$withQuery[$with]['table']
                            );

                            $this->withQueryBySelect($builder,$with,$selectExplode,$params,$foreignRepository);
                        }
                        else{
                            $this->withQueryWithoutSelect($builder,$with,$params,$foreignRepository);
                        }

                    }
                    else{
                        return Exception::withException();
                    }
                }
            }
        }

        return $builder;
    }

    /**
     * handler with query by select for model
     *
     * @param $builder
     * @param $with
     * @param $selectExplode
     * @param $params
     * @param $foreignRepository
     */
    private function withQueryBySelect($builder,$with,$selectExplode,$params,$foreignRepository)
    {
        $builder->with([$with => function($query) use($with,$selectExplode,$params,$foreignRepository){
            $withRange = $params['withRange'][$with] ?? ($params['range'] ?? '');
            $repositoryInstance = Repository::$foreignRepository();
            if(isset($params['with'][$with]['with'])){
                if(is_array($params['with'][$with]['with'])){
                    $selectExplode[] = getTableCode($with);
                }

                foreach ($params['with'][$with]['with'] as $nestedKey => $nestedWith){
                    if(in_array($nestedKey, (array)$this->hasValues,true)){
                        $query->hasQuery($nestedKey);
                    }

                    if(in_array($nestedKey, (array)$this->doesntHaveValues,true)){
                        $query->doesntHaveQuery($nestedKey);
                    }
                }

                $query->withQuery($params['with'][$with]['with']);
            }

            $query->select($selectExplode);
            $query->range($repositoryInstance,$withRange);

        }]);
    }

    /**
     * handler with query without select for model
     *
     * @param $builder
     * @param $with
     * @param $params
     * @param $foreignRepository
     */
    private function withQueryWithoutSelect($builder,$with,$params,$foreignRepository)
    {
        $builder->with([$with => function($query) use($with,$params,$foreignRepository){
            $withRange = $params['withRange'][$with] ?? ($params['range'] ?? '');
            $repositoryInstance = Repository::$foreignRepository();
            if(isset($params['with'][$with]['with'])){

                foreach ($params['with'][$with]['with'] as $nestedKey => $nestedWith){
                    if(in_array($nestedKey, (array)$this->hasValues,true)){
                        $query->hasQuery($nestedKey);
                    }

                    if(in_array($nestedKey, (array)$this->doesntHaveValues,true)){
                        $query->doesntHaveQuery($nestedKey);
                    }
                }

                $query->withQuery($params['with'][$with]['with']);
            }

            $query->range($repositoryInstance,$withRange);

        }]);
    }
}
