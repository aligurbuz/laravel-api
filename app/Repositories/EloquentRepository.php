<?php

declare(strict_types=1);

namespace App\Repositories;

use Throwable;
use App\Services\Db;
use App\Factory\Factory;
use App\Services\Client;
use App\Exceptions\Exception;
use App\Exceptions\SqlExceptionManager;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class EloquentRepository
 * @package App\Repositories
 */
class EloquentRepository
{
    /**
     * @var object|null
     */
    protected ?object $repository = null;

    /**
     * get data for user model
     *
     * @return array
     */
    public function get() : array
    {
        return Factory::repository(['model' => $this->getModel()])->cache(function(){
            return $this->graphQl()->simplePaginate(20)->toArray();
        });
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
            return $this->sqlException($exception);

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

            try{
                $update = $baseQuery->update($data);
            }
            catch (\Exception $exception){
               return $this->sqlException($exception);
            }

            if($update=='0'){
                return Exception::updateException();
            }

            $queryList[] = $baseQuery->get()->toArray();
        }

        return $queryList;
    }

    /**
     * @param int $id
     * @param array $select
     * @return array
     */
    public function find(int $id,array $select = ['*']) : array
    {
        $find = $this->instance()->find($id,$select);

        return $find ? $find->toArray() : [];
    }

    /**
     * checks if the data is available
     *
     * @param $field
     * @param $value
     * @return bool
     */
    public function exists($field,$value) : bool
    {
        return $this->instance()->where($field,$value)->first() ? true : false;
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
     * get table for model name
     *
     * @return mixed
     */
    public function getTable(): mixed
    {
        return (new static::$model)->getTable();
    }

    /**
     * get repository results for model
     *
     * @return array
     */
    public function getRepository() : array
    {
        return $this->repository->get()->toArray();
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
     * @return EloquentRepository
     */
    public function desc(Builder $builder = null): EloquentRepository
    {
        $this->builder($builder)->orderBy('id','desc');

        return $this;
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
        return $builder ?? $this->instance();
    }

    /**
     * get instance
     *
     * @param bool $repository
     * @return Builder
     */
    public function instance($repository = true) : Builder
    {
        if(is_null($this->repository)){
            $this->repository = static::$model::repository($this,$repository);
        }

        return $this->repository;
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
        return static::$model::repository($this)
            ->range($this)
            ->instruction()
            ->doesntHaveQuery()
            ->hasQuery()
            ->withQuery()
            ->selectQuery()
            ->orderByQuery()
            ->filterQuery()
            ->search();
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

    /**
     * throws sql exception for repository
     *
     * @param Throwable $throwable
     * @return mixed
     */
    public function sqlException(Throwable $throwable) : mixed
    {
        return SqlExceptionManager::make($throwable,$this->getTable(),function() use($throwable){
            return Exception::modelCreateException($throwable->getPrevious()->getMessage());
        });
    }
}
