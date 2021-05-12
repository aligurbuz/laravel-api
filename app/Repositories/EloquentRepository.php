<?php

namespace App\Repositories;

use App\Services\Db;
use App\Services\Client;
use App\Exceptions\Exception;
use App\Exceptions\SqlExceptionManager;
use Illuminate\Database\Eloquent\Builder;

class EloquentRepository
{
    /**
     * get data for user model
     *
     * @return array
     */
    public function get() : array
    {
        return $this->graphQl()->simplePaginate(20)->toArray();
    }

    /**
     * create data for user model
     *
     * @param array $data
     * @return array|object
     */
    public function create(array $data = []): array|object
    {
        $data = count($data) ? $data : Client::data();

        $list = [];

        try {
            foreach ($data as $value){
                $list[] = static::$model::create($value);
            }

            return $list;
        }
        catch (\Exception $exception){
            return SqlExceptionManager::make($exception,function() use($exception){
                return Exception::modelCreateException($exception->getPrevious()->getMessage());
            });

        }
    }

    /**
     * update data for user model
     *
     * @param array $data
     * @param bool $id
     * @return array|object
     */
    public function update(array $data = [],$id = true): array|object
    {
        $clientData = count($data) ? $data : Client::data();

        $queryList = [];

        foreach ($clientData as $data){
            $baseQuery = $this->graphQl()->where(function(Builder $builder) use($data,$id){
                if(isset($data['id']) || $id === true){
                    $builder->where('id',intval(($data['id'] ?? 0)));
                }
            });

            $update = $baseQuery->update($data);

            if($update=='0'){
                return Exception::updateException();
            }

            $queryList[] = $baseQuery->get()->toArray();
        }

        return $queryList;

    }

    /**
     * @param $id
     * @return array
     */
    public function find(int $id) : array
    {
        return static::$model::find($id)->toArray();
    }

    /**
     * get model name
     *
     * @return mixed
     */
    public function getModel(): mixed
    {
        return static::$model;
    }

    /**
     * get today scope for client
     *
     * @param null|Builder $builder
     * @return object
     */
    public function active(Builder $builder = null): object
    {
        return $this->ensureColumnExists('status',$builder,function() use($builder){
            return $this->builder($builder)->where('status',1);
        });
    }

    /**
     * get today scope for client
     *
     * @param null|Builder $builder
     * @return Builder
     */
    public function desc(Builder $builder = null): Builder
    {
        return $this->builder($builder)->orderBy('id','desc');
    }

    /**
     * get ranges
     *
     * @return array
     */
    public function getRanges() : array
    {
        return $this->ranges ?? [];
    }

    /**
     * get builder method for model
     *
     * @param Builder|null $builder
     * @return object
     */
    public function builder(Builder $builder = null): object
    {
        return $builder ?? static::$model;
    }

    /**
     * get instance
     *
     * @return Builder
     */
    public function instance() : Builder
    {
        return static::$model::repository($this);
    }

    /**
     * get global instance
     *
     * @return object
     */
    public function globalScope(): object
    {
        return (new GlobalScopeManager($this))->make();
    }

    /**
     * get graphql builder
     *
     * @return mixed
     */
    public function graphQl() : mixed
    {
        return static::$model::repository($this)->range($this)->instruction()->withQuery()
            ->selectQuery()->orderByQuery()->filterQuery();
    }

    /**
     * get columns for database
     *
     * @param $column
     * @param $builder
     * @param callable $callback
     * @return array|object
     */
    public function ensureColumnExists($column,$builder,callable $callback) : array|object
    {
        if(Db::ensureColumnExists($this->getModel(),$column)){
            return call_user_func($callback);
        }

        return $builder;
    }
}
