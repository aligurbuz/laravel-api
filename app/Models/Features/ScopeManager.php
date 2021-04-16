<?php

namespace App\Models\Features;

use App\Services\AppContainer;
use App\Services\Db;
use Illuminate\Database\Eloquent\Builder;

trait ScopeManager
{
    /**
     * @var array[]
     */
    protected array $withSelects = [];

    /**
     * @var string[]
     */
    protected array $operators = ['<','>','<=','>=','<>'];

    /**
     * get active data for model
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeActive(Builder $builder): Builder
    {
        return $builder->where('status',1)->where('is_deleted',0);
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
                if(is_array($items) && isset($items['description'])){
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
     * @return Builder
     */
    public function scopeOrderByQuery(Builder $builder): Builder
    {
        $params = request()->query->all();

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
     * @return Builder
     */
    public function scopeFilterQuery(Builder $builder): Builder
    {
        $params = request()->query->all();

        if(isset($params['filter'])){
            $builder->where(function($query) use($params){
                foreach ($params['filter'] as $key => $value){

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
    public function scopeWithQuery(Builder $builder): Builder
    {
        $params = request()->query->all();

        if(isset($params['with'])){
            $withQuery = $this->withQuery;

            if(is_array($params['with']) && count($params['with'])){
                foreach ($params['with'] as $with => $select){
                    if(isset($withQuery[$with],$withQuery[$with]['foreignColumn'],$withQuery[$with]['localColumn'],$withQuery[$with]['table'])){
                        $foreignColumn = $withQuery[$with]['foreignColumn'];
                        $localColumn = $withQuery[$with]['localColumn'];

                        $this->withSelects[] = $localColumn;

                        if(strlen($select)>0 && $select!=='*'){
                            $selectExplode = explode(',',$select);
                            $selectExplode = $this->checkSelectColumn(
                                array_merge([$foreignColumn],$selectExplode)
                                ,$withQuery[$with]['table']
                            );

                            if(is_array($selectExplode) && count($selectExplode)){
                                $builder->with($with.':'.implode(',',$selectExplode));
                            }
                        }
                        else{
                            $builder->with($with);
                        }

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
    private function checkSelectColumn($select = [],$table = null): array
    {
        foreach ($select as $selectKey =>$item){
            if(!in_array($item,Db::columns($table ?? $this->getTable()))){
                unset($select[$selectKey]);
            }
        }

        return $select;
    }
}