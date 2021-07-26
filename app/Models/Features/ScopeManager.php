<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Services\Db;
use App\Exceptions\Exception;
use App\Services\AppContainer;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

/**
 * Trait ScopeManager
 * @package App\Models\Features
 */
trait ScopeManager
{
    use FullTextSearch;

    /**
     * @var array[]
     */
    protected array $withSelects = [];

    /**
     * @var string[]
     */
    protected array $operators = ['<','>','<=','>=','<>'];

    /**
     * @var array|string[]
     */
    protected array $autoRanges = [
        'desc'      => 'Sorts your object by last registration value.',
        'active'    => 'It filters according to the status=1 value for your object.',
    ];

    /**
     * get client scope data for model
     *
     * @param Builder $builder
     * @param object $object
     * @param null|string $data
     * @return object
     */
    public function scopeRange(Builder $builder,object $object,mixed $data = null): object
    {
        $range          = $data  ?? ((request()->query->all())['range'] ?? null);
        $ranges         = is_string($range) ? explode(',',$range) : [];
        $modelRanges    = array_merge($object->getRanges(),$this->autoRanges);

        //We record the instruction value in the response data to inform the user.
        AppContainer::set('responseFormatterSupplement',['ranges' => $modelRanges],true);

        foreach ($ranges as $data){
            if(array_key_exists($data,$modelRanges) && method_exists($object,$data)){
                $object->$data($builder);
            }
            else{
                return Exception::rangeException('',['key' => $data]);
            }
        }

        return $builder;
    }

    /**
     * get scope repository for model
     *
     * @param Builder $builder
     * @param object $object
     * @param bool $repository
     * @return object
     */
    public function scopeRepository(Builder $builder,object $object,bool $repository = true): object
    {
        if(app()->runningInConsole()) $repository = false;

        $objectName = lcfirst(class_basename($object));

        // if there is a method with the same name as object,
        // this method will be executed automatically.
        if(method_exists($object,$objectName)) return $repository ? $object->$objectName() : $builder;

        return $builder;
    }

    /**
     * Scope a query that matches a full text search of term.
     * This version calculates and orders by relevance score.
     *
     * @param Builder $builder
     * @param string|null $term
     * @return Builder
     */
    public function scopeSearch(Builder $builder, ?string $term = null): Builder
    {
        $clientSearch = (request()->query->all())['search'] ?? null;
        $term = $term ?? $clientSearch;

        if(is_null($term)) return $builder;

        $columns = implode(',',$this->searchable);

        $searchableTerm = $this->fullTextWildcards($term);

        return $builder->whereRaw("MATCH (".$columns.") AGAINST (? IN BOOLEAN MODE)", $searchableTerm);
    }

    /**
     * set instruction for response
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeInstruction(Builder $builder) : Builder
    {
        if(isset($this->withQuery) && is_array($this->withQuery)){
            foreach ($this->withQuery as $with => $items){
                if(is_array($items) && isset($items['description']) && $with!=='localization'){
                    AppContainer::set('responseFormatterSupplement',['relations' =>[$with => $items['description']]],true);
                }
            }
        }
        return $builder;
    }

    /**
     * get active data for model
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeSelectQuery(Builder $builder): Builder
    {
        $params = request()->query->all();

        if(isset($params['select'])){
            $paramsSelect = explode(',',$params['select']);
            $select = $this->checkSelectColumn(
                array_merge($this->withSelects,$paramsSelect)
            );

            if(is_array($select) && count($select)){
                return $builder->select($select);
            }
        }

        return $builder;
    }

    /**
     * get active data for model
     *
     * @param Builder $builder
     * @param array $data
     * @return Builder
     */
    public function scopeOrderByQuery(Builder $builder,array $data = []): Builder
    {
        $params = count($data) ? $data : request()->query->all();

        if(isset($params['orderBy'])){
            $orderBy = explode(',',$params['orderBy']);
            return $builder->orderBy($orderBy[0],($orderBy[1] ?? 'asc'));
        }

        return $builder;
    }

    /**
     * get filter query data for model
     *
     * @param Builder $builder
     * @return object
     */
    public function scopeFilterQuery(Builder $builder): object
    {
        $params = request()->query->all();
        $indexes = Db::indexes($this->getTable());

        if(isset($params['filter'])){
            $builder->where(function($query) use($params,$indexes){
                $filtering = indexOrdering($this->getTable(),$params['filter']);
                foreach ($filtering as $key => $value){

                    if(!in_array($key,$indexes)){
                        Exception::filterException('',['key' => $key]);
                    }

                    if(!in_array($key,Db::columns($this->getTable()))){
                        break;
                    }

                    if(is_array($value)){
                        foreach ($value as $operator => $item){
                            if(in_array($operator,$this->operators)){
                                $withOperator = $query->where($key,$operator,$item);
                            }
                        }
                    }

                    if(!isset($withOperator) && is_string($value)){
                        $query->whereIn($key,explode(',',$value));
                    }

                }
            });
        }

        return $builder;
    }

    /**
     * get eager loading data for model
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeHasQuery(Builder $builder): Builder
    {
        $params = request()->query->all();

        if(isset($params['has'])){
            $withQuery = $this->withQuery;
            $hasQuery = explode(',',$params['has']);

            foreach ($hasQuery as $has){
                if(isset($withQuery[$has])){
                    $builder->whereHas($has);
                }
            }
        }

        return $builder;
    }

    /**
     * get eager loading data for model
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeDoesntHaveQuery(Builder $builder): Builder
    {
        $params = request()->query->all();

        if(isset($params['doesntHave'])){
            $withQuery = $this->withQuery;
            $doesntHaveQuery = explode(',',$params['doesntHave']);

            foreach ($doesntHaveQuery as $doesnt){
                if(isset($withQuery[$doesnt])){
                    $builder->doesntHave($doesnt);
                }
            }
        }

        return $builder;
    }


    /**
     * get eager loading data for model
     *
     * @param Builder $builder
     * @param array $with
     * @return object
     */
    public function scopeWithQuery(Builder $builder,array $with = []): object
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

                    if(
                    isset(
                        $withQuery[$with],
                        $withQuery[$with]['foreignColumn'],
                        $withQuery[$with]['localColumn'],
                        $withQuery[$with]['table']
                    )
                    ){
                        $foreignColumn = $withQuery[$with]['foreignColumn'];
                        $foreignRepository = $withQuery[$with]['repository'] ?? null;
                        $localColumn = $withQuery[$with]['localColumn'];

                        $this->withSelects[] = $localColumn;

                        if(strlen($select)>0 && $select!=='*'){
                            $selectExplode = explode(',',$select);
                            $selectExplode = $this->checkSelectColumn(
                                array_merge([$foreignColumn],$selectExplode)
                                ,$withQuery[$with]['table']
                            );

                            if(is_array($selectExplode) && count($selectExplode)){
                                $builder->with([$with => function($query) use($with,$selectExplode,$params,$foreignRepository){
                                    $withRange = $params['withRange'][$with] ?? [];
                                    $repositoryInstance = Repository::$foreignRepository();
                                    if(isset($params['with'][$with]['with'])){

                                        if(is_array($params['with'][$with]['with'])){
                                            $selectExplode[] = getTableCode($with);
                                            /**foreach ($params['with'][$with]['with'] as $withModel => $withItem){
                                                //$selectExplode[] = getTableCode($withModel);
                                            }**/
                                        }

                                        $query->withQuery($params['with'][$with]['with']);
                                        $query->select($selectExplode);
                                        $query->repository($repositoryInstance);
                                        $query->range($repositoryInstance,$withRange);
                                    }
                                    else{
                                        $query->select($selectExplode);
                                        $query->repository($repositoryInstance);
                                        $query->range($repositoryInstance,$withRange);
                                    }

                                }]);
                            }
                        }
                        else{
                            $builder->with([$with => function($query) use($with,$params,$foreignRepository){
                                $withRange = $params['withRange'][$with] ?? [];
                                $repositoryInstance = Repository::$foreignRepository();
                                if(isset($params['with'][$with]['with'])){
                                    $query->withQuery($params['with'][$with]['with']);
                                    $query->repository($repositoryInstance);
                                    $query->range($repositoryInstance,$withRange);
                                }
                                else{
                                    $query->repository($repositoryInstance);
                                    $query->range($repositoryInstance,$withRange);
                                }

                            }]);
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
     * check select column for db
     *
     * @param array $select
     * @param null|string $table
     * @return array
     */
    private function checkSelectColumn(array $select = [], ?string $table = null): array
    {
        $columns = Db::columns($table ?? $this->getTable());

        foreach ($select as $selectKey =>$item){
            if(!in_array($item,$columns)){
                Exception::selectException('',['key' => $item]);
                return [];
            }
        }

        return $select;
    }
}
