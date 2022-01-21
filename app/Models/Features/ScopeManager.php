<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Services\Db;
use Illuminate\Support\Str;
use App\Exceptions\Exception;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Builder;

/**
 * Trait ScopeManager
 * @package App\Models\Features
 */
trait ScopeManager
{
    use FullTextSearch,WithProcess,ScopeManagerTrait,GroupByProcess;

    /**
     * @var array[]
     */
    protected array $withSelects = [];

    /**
     * @var array
     */
    protected array $hasValues = [];

    /**
     * @var array
     */
    protected array $doesntHaveValues = [];

    /**
     * @var string[]
     */
    protected array $operators = ['<','>','<=','>=','<>','=','or'];

    /**
     * get active scope for model
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeActive(Builder $builder) : object
    {
        return $builder->where('status',1)->where('is_deleted',0);
    }

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
        $rangeHandler   = $this->rangeContainer($object,$data);

        foreach (($rangeHandler['ranges'] ?? []) as $data){
            if(array_key_exists($data,($rangeHandler['modelRanges'] ?? [])) && method_exists($object,$data)){
                $object->$data($builder);
            }
            else{
                if(is_string($data) && strlen($data)>0){
                    return Exception::rangeException('',['key' => $data]);
                }
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
        if(!consoleAuthorizationStatus()) $repository = false;

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
        if(property_exists($this,'withQuery') && is_array($this->withQuery)){
            $this->relationContainer($this->withQuery);
        }

        return $builder;
    }

    /**
     * get groupBy scope for model
     *
     * @param Builder $builder
     * @return object
     */
    public function scopeGroupByQuery(Builder $builder) : object
    {
        return $this->groupByProcessHandler($builder);
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
     * @param array $data
     * @return object
     */
    public function scopeFilterQuery(Builder $builder,array $data = []): object
    {
        $params = count($data) ? ['filter' => $data] : request()->query->all();
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
                                if($operator==='or'){
                                    $withOperator = $query->orWhere($key,$item);
                                }
                                else{
                                    $withOperator = $query->where($key,$operator,$item);
                                }
                            }
                            else{
                                Exception::customException(trans('exception.sqlOperatorException',['key' => $operator]));
                            }
                        }
                    }

                    if(!isset($withOperator) && (is_string($value) || is_numeric($value))){
                        $query->whereIn($key,explode(',',(string)$value));
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
     * @param string|null $has
     * @return Builder
     */
    public function scopeHasQuery(Builder $builder,?string $has = null): Builder
    {
        $request = request()->query->all();

        $params = (!is_null($has))
            ? ['has' => $has]
            : $request;

        if(isset($params['has'])){
            $withQuery = $this->withQuery;
            $hasQuery = explode(',',$params['has']);
            $this->hasValues = $hasQuery;

            foreach ($hasQuery as $has){
                if(isset($withQuery[$has],$withQuery[$has]['nested'])){
                    if(false===$withQuery[$has]['nested']){
                        $builder->whereHas($has,function(object $builder) use($request,$has){
                            $range = $request['hasRange'][$has] ?? ($request['range'] ?? '');
                            $hasFilter = $request['hasFilter'][$has] ?? [];

                            if(isset($request['hasFilter']) && count($hasFilter)=='0'){
                                Exception::customException(trans('exception.hasFilterException',['key' => $has]));
                                return $builder;
                            }

                            $repository = getModelWithPlural($has);
                            $repositoryMethod = Repository::$repository();
                            $builder->range($repositoryMethod,(string)$range)->filterQuery($hasFilter);
                            return $builder;
                        });
                    }
                }
                else{
                    Exception::customException(trans('exception.hasException',['key' => $has]));
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
            $this->doesntHaveValues = $doesntHaveQuery;

            foreach ($doesntHaveQuery as $doesnt){
                if(isset($withQuery[$doesnt],$withQuery[$doesnt]['nested']) && false===$withQuery[$doesnt]['nested']){
                    $builder->whereDoesntHave($doesnt,function(object $builder) use($params,$doesnt){
                        $range = $params['hasRange'][$doesnt] ?? ($params['range'] ?? '');
                        $repository = getModelWithPlural($doesnt);
                        $builder->range(Repository::$repository(),(string)$range);
                        return $builder;
                    });
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
        return $this->withProcessHandler($builder,$with);
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
        $tableName = $table ?? $this->getTable();

        $columns = Db::columns(Str::snake($tableName));

        foreach ($select as $item){
            if(!in_array($item,$columns)){
                Exception::selectException('',['key' => $item]);
                return [];
            }
        }

        return $select;
    }
}
