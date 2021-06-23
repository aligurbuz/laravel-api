<?php

declare(strict_types=1);

namespace App\Repositories;

use Throwable;
use App\Services\Db;
use App\Services\Client;
use App\Factory\Factory;
use Illuminate\Support\Str;
use App\Models\Localization;
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
    public function update(array $data = [],bool $id = true): array|object
    {
        $clientData = count($data) ? $data : Client::data();
        $queryList = [];

        foreach ($clientData as $data){
            $baseQuery = $this->instance()->where(function(Builder $builder) use($data,$id){
                $modelCode = Str::snake($this->getModelName()).'_code';
                if(isset($data[$modelCode]) || $id === true){
                    $builder->where($modelCode,intval(($data[$modelCode] ?? 0)));
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
     * get select columns instance for repository
     *
     * @param array $data
     * @return object
     */
    public function select(array $data = []) : object
    {
        $this->repository = $this->instance()->select($data);

        return $this;
    }

    /**
     * get code instance for repository
     *
     * @param int $code
     * @return object
     */
    public function code(int $code = 0) : object
    {
        $this->repository = $this->instance()->where(getTableCode($this->getModelName()),$code);

        return $this;
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
     * take latest data for repository
     *
     * @return array
     */
    public function latest() : array
    {
        $this->repository = $this->instance()->orderBy('id','desc')->take(1);

        return ($this->getRepository())[0] ?? [];
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
        return !is_null($this->instance()->where($field,$value)->first());
    }

    /**
     * get model namespace for repository
     *
     * @return mixed
     */
    public function getModel(): mixed
    {
        return static::$model;
    }

    /**
     * get model name for repository
     *
     * @param ?string $model
     * @return string
     */
    public function getModelName(string $model = null): string
    {
        return class_basename(($model ?? $this->getModel()));
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
     * @param bool $afterLoadingRepository
     * @return array
     */
    public function getRepository(bool $afterLoadingRepository = true) : array
    {
        if(is_null($this->repository)){
            $this->repository = $this->instance();
        }

        if($afterLoadingRepository && method_exists($this,'afterLoadingRepository')){
            $this->repository = $this->afterLoadingRepository();
        }

        return $this->repository->get()->toArray();
    }

    /**
     * after loading for repository
     *
     * @return object
     */
    public function afterLoadingRepository() : object
    {
        return $this->active()->instance();
    }

    /**
     * get today scope for client
     *
     * @param object|null $builder
     * @return object
     */
    public function active(?object $builder = null): object
    {
        $this->ensureColumnExists('status',$this->instance(),function() use($builder){
           $this->builder($builder)->where('status',1);
        });

        $this->ensureColumnExists('is_deleted',$this->instance(),function() use($builder){
            $this->builder($builder)->where('is_deleted',0);
        });

        return $this;
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
     * @param object|null $builder
     * @return object
     */
    public function builder(object $builder = null): object
    {
        return $builder ?? $this->instance();
    }

    /**
     * get instance
     *
     * @param bool $repository
     * @return object
     */
    public function instance(bool $repository = true) : object
    {
        if(is_null($this->repository)){
            $this->repository = static::$model::repository($this,$repository);
        }

        return $this->repository;
    }

    /**
     * get global instance
     *
     * @param null $builder
     * @return object
     */
    public function globalScope($builder = null): object
    {
        return (new GlobalScopeManager($this))->setBuilder($builder)->make();
    }

    /**
     * apply method for repository
     *
     * @param object|null $builder
     * @return object
     */
    public function apply(?object $builder = null): object
    {
        return $builder ?? $this->globalScope();
    }

    /**
     * get all entries for model
     *
     * @return array
     */
    public function all() : array
    {
        return $this->graphQl()->get()->toArray();
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
     * @return ?object
     */
    public function ensureColumnExists($column,$builder,callable $callback) : ?object
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

    /**
     * find repository by model
     *
     * @param $model
     * @return object
     */
    public function findRepositoryByModel($model) : object
    {
        $modelName = getModelName($model);
        return Repository::$modelName();
    }

    /**
     * set eager loading for repository
     *
     * @param $model
     * @param callable $callback
     * @return object
     */
    public function setEagerLoading($model,callable $callback) : object
    {
        $repositoryName = lcfirst(class_basename(
                $repository = $this->findRepositoryByModel($model))
        );

        return $repository->$repositoryName($repository->globalScope(
            call_user_func($callback)
        ));
    }

    /**
     * get with localization relation for repository
     *
     * @param object $modelInstance
     * @return object
     */
    public function withLocalization(object $modelInstance): object
    {
        return $this->setEagerLoading($localization = Localization::class,function() use($localization,$modelInstance){
            return $modelInstance->hasOne($localization,'localized_code',getTableCode($this->getModel()));
        });
    }
}
