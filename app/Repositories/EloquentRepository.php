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
use App\Repositories\Supporters\CacheRepository;
use App\Repositories\Supporters\CreateRepository;
use App\Repositories\Supporters\UpdateRepository;
use App\Repositories\Supporters\GlobalScopeManager;
use App\Repositories\Supporters\ResourceRepository;
use App\Repositories\Supporters\LocalizationRepository;

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
     * @var array
     */
    protected array $withBindings = [];

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
     * get sql syntax information for user model
     *
     * @param bool $fullSql
     * @return string
     */
    public function toSql(bool $fullSql = true) : string
    {
        $this->get();

        $sqlMethod = $fullSql ? 'toFullSql' : 'toSql';

        return $this->graphQl->{$sqlMethod}();
    }

    /**
     * get pagination model repository
     *
     * @param int|null $pagination
     * @return array
     */
    public function pagination(?int $pagination = null) : array
    {
        if(property_exists($this,'paginator') && !$this->paginator){
            return $this->graphQl->get()->toArray();
        }

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
        if(!isValidIndex($this->getTable(),$column)){
            return Exception::customException(trans('exception.filterException',['key' => $column]));
        }

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
     * it adds to builder not deleted data.
     *
     * @param object|null $builder
     * @return object
     */
    public function notDeleted(?object $builder = null): object
    {
        $this->ensureColumnExists('is_deleted',$this->instance(),function () use($builder){
            $this->repository = $this->builder($builder)->where('is_deleted',0);
        });

        return $this;
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
        $query = $this->instance()->where($field,$value);

        $this->ensureColumnExists('is_deleted',$this->instance(),function() use($field,$value,&$query){
            $query = $this->repository = $query->where('is_deleted',0);
        });

        $query = $query->get()->toArray();

        return isset($query[0]);
    }

    /**
     * @param object $builder
     * @param false $hash
     * @return mixed
     */
    public function toFullSql(object $builder,bool $hash = false) : mixed
    {
        $sql = $builder->toFullSql();

        if($hash){
            return crc32($sql);
        }

        return $sql;
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

        if(!is_null($connection = $this->getConnection())){
            return (new $model)->setConnection($connection);
        }

        return new $model;
    }

    /**
     * make eager loading via instance model
     *
     * @param bool $repository
     * @return object
     */
    public function with(bool $repository = true) : object
    {
        $this->repository = $this->instanceModel()->repository($this,$repository)->with($this->withBindings);

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
            $this->repository = $this->instanceModel()->repository($this,$repository);
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
     * get values being 1 or 0 for is_default column for model
     *
     * @param int $value
     * @return object
     */
    public function default(int $value = 1) : object
    {
        $this->repository = $this->instance()->where('is_default',$value);

        return $this;
    }

    /**
     * get model connection for repository
     *
     * @return string|null
     */
    public function getConnection() : ?string
    {
        if(property_exists($this,'connection')){
            return $this->connection;
        }

        if(method_exists($this,'setConnection')){
            return $this->setConnection();
        }

        return null;
    }

    /**
     * get graphql builder
     *
     * @return $this
     */
    public function graphQl() : EloquentRepository
    {
        $this->graphQl = ($this->instanceModel())->repository($this)
            ->filterQuery()
            ->range($this)
            ->instruction()
            ->doesntHaveQuery()
            ->hasQuery()
            ->withQuery()
            ->selectQuery()
            ->orderByQuery()
            ->groupByQuery()
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
            return Exception::customException($column.' column name is not valid');
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
     * @param string|null $model
     * @param callable $callback
     * @return object
     */
    public function setEagerLoading(?string $model,callable $callback) : object
    {
        $model = $model ?? $this->getModelName();

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
     * get group by fields for repository
     *
     * @return array
     */
    public function getGroupByFields() : array
    {
        if(property_exists($this,'groupByFields') && is_array($this->groupByFields)){
            return $this->groupByFields;
        }

        return [];
    }

    /**
     * get group by process fields for repository
     *
     * @return array
     */
    public function getGroupByProcessFields() : array
    {
        if(property_exists($this,'groupByProcessFields') && is_array($this->groupByProcessFields)){
            return $this->groupByProcessFields;
        }

        return [];
    }

    /**
     * get addPostQueries fields for repository
     *
     * @return array
     */
    public function getAddPostQueries() : array
    {
        if(property_exists($this,'addPostQueries') && is_array($this->addPostQueries)){
            return $this->addPostQueries;
        }

        return [];
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
     * get columns for model
     *
     * @return array
     */
    public function getColumns() : array
    {
        return Db::columns($this->getTable());
    }

    /**
     * get columns for model
     *
     * @return array
     */
    public function getIndexes() : array
    {
        return Db::indexes($this->getTable());
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

        if(in_array($snakeName = Str::snake($name),$this->getColumns(),true)){
            if(!in_array($snakeName,$this->getIndexes(),true)){
                Exception::filterException(true,['key' => $snakeName]);
            }

            $this->repository = $this->instance()->where($snakeName,$args[0] ?? null);
        }

        if(in_array($name,$this->getModelWithValues(),true)){
            $this->withBindings[$name] = ($args[0] ?? function($query) {});
            $this->with();
        }

        return $this;
    }
}
