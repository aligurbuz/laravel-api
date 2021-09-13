<?php

declare(strict_types=1);

namespace App\Repositories;

use Throwable;
use App\Constants;
use App\Services\Db;
use App\Services\Client;
use Illuminate\Support\Str;
use App\Exceptions\Exception;
use App\Exceptions\SqlExceptionManager;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class EloquentRepository
 * @package App\Repositories
 */
class EloquentRepository
{
    use CacheRepository,ResourceRepository,LocalizationRepository,CreateRepository,UpdateRepository;

    /**
     * @var object|null
     */
    protected ?object $repository = null;

    /**
     * @var array
     */
    protected static array $storages = [];

    /**
     * @var object|null
     */
    protected ?object $graphQl = null;

    /**
     * @var int
     */
    protected int $pagination = 20;

    /**
     * get data for user model
     *
     * @return array
     */
    public function get() : array
    {
        $this->setAutoEagerLoadings();

        // cache will be made according to your model.
        // this will make your queries very performance.
        return $this->additionalResourceHandler($this->useCache(function(){

            // a resource class will be valid,
            // where you can manipulate all the returned result set values one by one.
            return $this->resource(function(){
                return $this->graphQl();
            });
        }));
    }

    /**
     * get pagination model repository
     *
     * @param int|null $pagination
     * @return array
     */
    public function pagination(?int $pagination = null) : array
    {
        return $this->graphQl->paginate($pagination ?? $this->paginationHandler())->toArray();
    }

    /**
     * get pagination handler for repository model
     *
     * @return int
     */
    private function paginationHandler() : int
    {
        $limit = request()->query->get('limit',$this->pagination);

        if(!is_numeric($limit)){
            Exception::customException(trans('exception.limitException'));
        }

        $this->setPagination((int)$limit);

        return $this->pagination;
    }

    /**
     * set pagination value for repository model
     *
     * @param int $pagination
     * @return void
     */
    public function setPagination(int $pagination) : void
    {
        if($pagination<=$this->pagination){
            $this->pagination = $pagination;
        }
        else{
            Exception::customException(trans('exception.limitExceedException'));
        }
    }

    /**
     * get limit model repository
     *
     * @param int $limit
     * @return object
     */
    public function limit(int $limit) : object
    {
        $this->repository = $this->instance()->limit($limit);

        return $this;
    }

    /**
     * get skip take limit model repository
     *
     * @param int $skip
     * @param int $take
     * @return object
     */
    public function skipTake(int $skip,int $take) : object
    {
        $this->repository = $this->instance()->skip($skip)->take($take);

        return $this;
    }

    /**
     * get cache for repository model data
     *
     * @param mixed $tag
     * @param callable $callback
     * @return array
     */
    public function cache(mixed $tag,callable $callback): array
    {
        $this->setCacheTag($tag);
        $this->repository = call_user_func($callback,$this);

        return $this->useCache(function(){
            return $this->getRepository();
        });
    }

    /**
     * get array deniedEagerLoadings eager loadings model repository
     *
     * @return array
     */
    public function getDeniedEagerLoadings() : array
    {
        if(
            property_exists($this,'deniedEagerLoadings')
            && is_array($this->deniedEagerLoadings)
        ){
            return $this->deniedEagerLoadings;
        }

        return [];
    }

    /**
     * get array data model repository
     *
     * @return array
     */
    public function toArray() : array
    {
        return $this->graphQl->get()->toArray();
    }

    /**
     * create data for repository model
     *
     * @param array $data
     * @return array|object
     */
    public function create(array $data = []): array|object
    {
        return $this->createHandler($data);
    }

    /**
     * create just model value for repository
     *
     * @param $value
     * @return object
     */
    public function createModel($value) : object
    {
        return static::$model::create($value);
    }

    /**
     * get client data for create repository model
     *
     * @param array $data
     * @return array
     */
    public function getClientData(array $data = []) : array
    {
        return count($data) ? $data : Client::data();
    }

    /**
     * update data for repository model
     *
     * @param array $data
     * @param bool $id
     * @return array|object
     */
    public function update(array $data = [],bool $id = true): array|object
    {
        return $this->updateHandler($data,$id);
    }

    /**
     * update data for repository model
     *
     * @param array $updateData
     * @param array $createData
     * @return array|object
     */
    public function updateOrCreate(array $updateData = [],array $createData = []): array|object
    {
        return $this->updateHandler($updateData,false,(count($createData) ? $createData : $updateData));
    }

    /**
     * get proxy closure for repository
     *
     * @param mixed $callback
     * @param string $method
     * @return mixed
     */
    public function proxy(mixed $callback,string $method = 'pagination') : mixed
    {
        return proxyClosure($callback,function(EloquentRepository $repository) use($method){
            return $repository->$method();
        });
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
     * get where query for model
     *
     * @param string $column
     * @param string|int $value
     * @param string $operator
     * @return object
     */
    protected function where(string $column,string|int $value,string $operator = '=') : object
    {
        $this->repository = $this->instance()->where($column,$operator,$value);

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
        return $this->where($this->getModelCode(),$code);
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
     * get instance model
     *
     * @return object
     */
    public function instanceModel() : object
    {
        $model = $this->getModel();

        return new $model;
    }

    /**
     * make eager loading via instance model
     *
     * @param array $with
     * @param bool $repository
     * @return object
     */
    public function with(array $with = [],bool $repository = true) : object
    {
        $this->repository = $this->instanceModel()->repository($this,$repository)->with($with);

        return $this;
    }

    /**
     * get table for model name
     *
     * @return mixed
     */
    public function getTable(): mixed
    {
        return $this->instanceModel()->getTable();
    }

    /**
     * get table_codee for model name
     *
     * @return string
     */
    public function getModelCode(): string
    {
        return getTableCode($this->getModelName());
    }

    /**
     * get table for model name
     *
     * @return mixed
     */
    public function getModelWithValues(): mixed
    {
        return $this->instanceModel()->getWithValues();
    }

    /**
     * get table for model name
     *
     * @return mixed
     */
    public function getModelWithQueries(): mixed
    {
        return $this->instanceModel()->getWithQueries();
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

        return $this->additionalResourceHandler(
            $this->baseResource($this->repository->get()->toArray())
        );
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
            $this->repository = $this->builder($builder)->where('status',1);
        });

        $this->ensureColumnExists('is_deleted',$this->instance(),function() use($builder){
            $this->repository = $this->builder($builder)->where('is_deleted',0);
        });

        return $this;
    }

    /**
     * get sequence model for client
     *
     * @param object|null $builder
     * @return object
     */
    public function sequence(?object $builder = null): object
    {
        $this->ensureColumnExists('sequence_time',$this->instance(),function() use($builder){
            $this->repository = $this->builder($builder)->orderBy('sequence_time','desc');
        });

        $this->ensureColumnExists('sequence',$this->instance(),function() use($builder){
            $this->repository = $this->builder($builder)->orderBy('sequence','asc');
        });

        return $this;
    }

    /**
     * get order by desc scope for client
     *
     * @param null|Builder $builder
     * @return EloquentRepository
     */
    public function desc(Builder $builder = null): EloquentRepository
    {
        $this->repository = $this->builder($builder)->orderBy('id','desc');

        return $this;
    }

    /**
     * get order by asc scope for client
     *
     * @param null|Builder $builder
     * @return EloquentRepository
     */
    public function asc(Builder $builder = null): EloquentRepository
    {
        $this->repository = $this->builder($builder)->orderBy('id','asc');

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
        return $builder ?? (new GlobalScopeManager($this))->setBuilder($builder)->make();
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
        return $this->instance()->get()->toArray();
    }

    /**
     * get graphql builder
     *
     * @return $this
     */
    public function graphQl() : EloquentRepository
    {
        $this->graphQl = static::$model::repository($this)
            ->range($this)
            ->instruction()
            ->doesntHaveQuery()
            ->hasQuery()
            ->withQuery()
            ->selectQuery()
            ->orderByQuery()
            ->filterQuery()
            ->search();

        return $this;
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
     * throw exception if not exist columns for database
     *
     * @param $column
     * @param callable $callback
     * @return object
     */
    public function throwExceptionIfColumnNotExist($column,callable $callback) : object
    {
        if(!Db::ensureColumnExists($this->getModel(),$column)){
            return Exception::customException('collect column name is not valid');
        }

        return call_user_func($callback);
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
            return Exception::modelCreateException(
                is_null($throwable->getPrevious()) ? $throwable->getMessage() : $throwable->getPrevious()->getMessage()
            );
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
     * get hitter property values for repository
     *
     * @return array
     */
    public function getHitter() : array
    {
        if(property_exists($this,'hitter')){
            return $this->hitter;
        }

        return [];
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
     * get eager loading handler for eloquent repository
     *
     * @param string $model
     * @param array $args
     * @return object
     */
    public function eagerLoadingHandler(string $model,array $args = []) : object
    {
        $withKey = Str::camel($model);
        $model = getModelWithPlural($model);

        $modelInstance    = $args[0] ?? $this->instanceModel();
        $modelNamespace   = Constants::modelNamespace.'\\'.$model;

        return $this->setEagerLoading($modelNamespace,function() use($modelNamespace,$modelInstance,$model,$withKey){
            $queries = (method_exists($modelInstance,'getWithQueries')) ? $modelInstance->getWithQueries() : [];
            $list = $queries[$withKey] ?? [];

            $getLocalizations = $this->findRepositoryByModel($model)->getLocalizations();


            return $modelInstance->hasMany(
                $modelNamespace,
                ($list['foreignColumn'] ?? null),
                ($list['localColumn'] ?? null)
            )->with((count($getLocalizations) ? 'localization' : []));
        });
    }

    /**
     * get collects for repository
     *
     * @return array
     */
    public function getCollects() : array
    {
        if(property_exists($this,'collects') && is_array($this->collects)){
            return $this->collects;
        }

        return [];
    }

    /**
     * get auto eager loading values for repository
     *
     * @return array
     */
    public function getAutoEagerLoadings() : array
    {
        if(property_exists($this,'autoEagerLoadings') && is_array($this->autoEagerLoadings)){
            return $this->autoEagerLoadings;
        }

        return [];
    }

    /**
     * get additional resource for repository
     *
     * @return bool
     */
    public function getAdditionalResource() : bool
    {
        if(property_exists($this,'additionalResource') && is_bool($this->additionalResource)){
            return $this->additionalResource;
        }

        return false;
    }

    /**
     * get trait handler for repository
     *
     * @param array $data
     * @return array
     */
    public function additionalResourceHandler(array $data = []) : array
    {
        return ($this->getAdditionalResource()) ? $this->additionalResource($data,__FUNCTION__) : $data;
    }

    /**
     * set auto eager loadings for repository
     *
     * @return void
     */
    public function setAutoEagerLoadings() : void
    {
        $with = request()->query->get('with',[]);

        if(property_exists($this,'localization') && count($this->localization)){
            request()->query->set('with',array_merge($with,['localization' => 'values']));
        }

        foreach ($this->getAutoEagerLoadings() as $loading){
            if(!isset($with[$loading])){
                request()->query->set('with',array_merge($with,[$loading => '*']));
            }
        }
    }

    /**
     * get __call method for eloquent repository
     *
     * @param string $name
     * @param array $args
     * @return object|null
     */
    public function __call(string $name,array $args = []) : ?object
    {
        if(Str::startsWith($name,'with')){
            $model = str_replace('with','',$name);
            return $this->eagerLoadingHandler($model,$args);
        }

        $this->with([$name]);

        return $this;
    }
}
