<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Constants;
use App\Exceptions\Exception;
use App\Exceptions\SqlExceptionManager;
use App\Facades\Database\Authenticate\ApiKey;
use App\Facades\Database\Authenticate\Authenticate;
use App\Repositories\Supporters\CacheRepository;
use App\Repositories\Supporters\CreateRepository;
use App\Repositories\Supporters\GlobalScopeManager;
use App\Repositories\Supporters\Helpers\Dummy;
use App\Repositories\Supporters\Helpers\OppositeModelClientConverter;
use App\Repositories\Supporters\LocalizationRepository;
use App\Repositories\Supporters\ResourceRepository;
use App\Repositories\Supporters\UpdateRepository;
use App\Services\AppContainer;
use App\Services\Client;
use App\Services\Date;
use App\Services\Db;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;
use Throwable;

/**
 * Class EloquentRepository
 * @property $limit
 * @property bool $paginator
 * @package App\Repositories
 * @method bigIntegerFaker()
 * @method bigInteger()
 */
class EloquentRepository
{
    use CacheRepository, ResourceRepository, LocalizationRepository, CreateRepository, UpdateRepository;

    /**
     * @var array
     */
    protected static array $storages = [];

    /**
     * @var object|null
     */
    protected ?object $repository = null;
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
     * @var bool
     */
    protected bool $eventStatus = true;

    /**
     * get sql syntax information for user model
     *
     * @param bool $fullSql
     * @return string
     */
    public function toSql(bool $fullSql = true): string
    {
        $this->get();

        $sqlMethod = $fullSql ? 'toFullSql' : 'toSql';

        return $this->graphQl->{$sqlMethod}();
    }

    /**
     * get data for user model
     *
     * @return array
     */
    public function get(): array
    {
        // when using the repository, we leave a record
        // in the container so that we can understand the client request.
        $this->setClientRepositoryRequest();

        //We automatically set localizations to "with".
        $this->setAutoEagerLoadings();

        // cache will be made according to your model.
        // this will make your queries very performance.
        return $this->additionalResourceHandler($this->useCache(function () {

            // a resource class will be valid,
            // where you can manipulate all the returned result set values one by one.
            return $this->resource(function () {
                return $this->graphQl();
            });
        }));
    }

    /**
     * set client repository request
     *
     * @return void
     */
    public function setClientRepositoryRequest(): void
    {
        AppContainer::setWithTerminating(Constants::clientRepositoryRequest, true);
    }

    /**
     * It detects whether the request sent to the repository class is from the client.
     *
     * @return bool
     */
    public function isClient(): bool
    {
        return isClientRequest();
    }

    /**
     * get customer code for repository
     *
     * @return int
     */
    public function customerCode(): int
    {
        return $this->isClient() ? (int)client('customer_code') : customerCode();
    }

    /**
     * set auto eager loadings for repository
     *
     * @return void
     */
    public function setAutoEagerLoadings(): void
    {
        $with = request()?->query('with', []);

        $this->detectDeniedEagerLoadings($with);

        if (property_exists($this, 'localization') && count($this->localization)) {
            request()->query->set('with', array_merge($with, ['localization' => 'values']));
        }

        $withList = [];
        $withDataList = [];

        foreach ($this->getAutoEagerLoadings() as $loading) {
            $withDotSplit = explode('.', $loading);
            foreach ($withDotSplit as $dotKey => $withData) {
                if ($dotKey === 0) {
                    $withDataList[] = $withData;
                    request()->query->set('with', array_merge($with, $withList = [$withData => ['select' => '*']]));
                } else {
                    request()->query->set('with', array_merge_recursive($withList, [current($withDataList) => ['with' => [
                        $withData => ['select' => '*']
                    ]]]));
                }
            }
        }
    }

    /**
     * get recursive denied eager loadings for repository
     *
     * @param array $with
     */
    public function detectDeniedEagerLoadings(array $with = []): void
    {
        foreach ($with as $relation => $data) {
            $deniedEagerLoadings = $this->getDeniedEagerLoadings();

            if (in_array($relation, $deniedEagerLoadings, true) || in_array('all', $deniedEagerLoadings, true)) {
                Exception::customException(trans('exception.deniedEagerLoadings', ['key' => $relation]));
            }

            if (isset($data['with'])) {
                $this->detectDeniedEagerLoadings($data['with']);
            }
        }
    }

    /**
     * get array deniedEagerLoadings eager loadings model repository
     *
     * @return array
     */
    public function getDeniedEagerLoadings(): array
    {
        if (
            property_exists($this, 'deniedEagerLoadings')
            && is_array($this->deniedEagerLoadings)
        ) {
            return $this->deniedEagerLoadings;
        }

        return [];
    }

    /**
     * get auto eager loading values for repository
     *
     * @return array
     */
    public function getAutoEagerLoadings(): array
    {
        if (property_exists($this, 'autoEagerLoadings') && is_array($this->autoEagerLoadings)) {
            return $this->autoEagerLoadings;
        }

        return [];
    }

    /**
     * get countable values for repository
     *
     * @return array
     */
    public function getCountable(): array
    {
        if (property_exists($this, 'countable') && is_array($this->countable)) {
            return $this->countable;
        }

        return [];
    }

    /**
     * get trait handler for repository
     *
     * @param array $data
     * @return array
     */
    public function additionalResourceHandler(array $data = []): array
    {
        return ($this->getAdditionalResource()) ? $this->additionalResource($data, __FUNCTION__) : $data;
    }

    /**
     * get additional resource for repository
     *
     * @return bool
     */
    public function getAdditionalResource(): bool
    {
        if (property_exists($this, 'additionalResource') && is_bool($this->additionalResource)) {
            return $this->additionalResource;
        }

        return false;
    }

    /**
     * get graphql builder
     *
     * @return $this
     */
    public function graphQl(): EloquentRepository
    {
        $instanceModel = $this->instanceModel();
        $defaultModel = $this->getModel();
        $defaultModelName = $this->getModelName();

        $this->graphQl = ($instanceModel)->repository($this)
            ->filterQuery()
            ->range($this)
            ->instruction()
            ->doesntHaveQuery()
            ->hasQuery()
            ->hasFilterQuery()
            ->withQuery()
            ->selectQuery()
            ->orderByQuery()
            ->groupByQuery()
            ->search();

        // if the model has been changed,
        // we have to refresh the graphQl data.
        if ($this->getModel() !== $defaultModel) {
            $this->oppositeModelClientConverter(Str::camel($defaultModelName));
            $this->setAutoEagerLoadings();
            $this->graphQl();
        }

        // if the AddToEnd scope method is used,
        // the container scope will be appended to the end of the query.
        if (is_array($addToEnds = AppContainer::get(Constants::addScopeToEnd))) {
            foreach ($addToEnds as $addToEnd) {
                $this->graphQl->$addToEnd();
            }
        }

        return $this;
    }

    /**
     * get instance model
     *
     * @return object
     */
    public function instanceModel(): object
    {
        // this method will run setHidden for the model,
        // according to the hidden methods written in the promoter trait classes.
        $this->setClientRepositoryHidden();

        $model = $this->getModel();
        $modelInstance = (new $model);

        if (!is_null($connection = $this->getConnection())) {
            return $modelInstance->setConnection($connection);
        }

        return $modelInstance;
    }

    /**
     * set client repository hidden values for container
     *
     * @return void
     */
    private function setClientRepositoryHidden(): void
    {
        if (AppContainer::has('clientRepositoryRequest') && !app()->runningInConsole()) {
            $hiddenMethodName = 'set' . ucfirst(ApiKey::who()) . 'Hidden';

            if (method_exists($this, $hiddenMethodName)) {
                AppContainer::setWithTerminating('setClientRepositoryHidden', $this->{$hiddenMethodName}());
            } elseif (method_exists($this, 'setHidden')) {
                AppContainer::setWithTerminating('setClientRepositoryHidden', $this->setHidden());
            }
        }
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
     * set model namespace for repository
     *
     * @param string $model
     * @param bool $source
     * @return EloquentRepository
     */
    public function setModel(string $model, bool $source = false): EloquentRepository
    {
        if ($source) {
            $this->withSource();
        }

        static::$model = Constants::modelNamespace . '\\' . ucfirst($model);

        return $this;
    }

    /**
     * set container source request for repository
     *
     * @return EloquentRepository
     */
    public function withSource(): EloquentRepository
    {
        AppContainer::setWithTerminating('repositorySource', true);

        return $this;
    }

    /**
     * get container source request for repository
     *
     * @return bool
     */
    public function hasContainerSource(): bool
    {
        return AppContainer::has('repositorySource');
    }

    /**
     * get model connection for repository
     *
     * @return string|null
     */
    public function getConnection(): ?string
    {
        if (property_exists($this, 'connection')) {
            return $this->connection;
        }

        if (method_exists($this, 'setConnection')) {
            return $this->setConnection();
        }

        return null;
    }

    /**
     * get pagination model repository
     *
     * @param int|null $pagination
     * @return array
     */
    public function pagination(?int $pagination = null): array
    {
        $this->setEndpointQueries($this->graphQl);

        if (property_exists($this, 'paginator') && !$this->paginator) {
            return $this->graphQl->get()->toArray();
        }

        $paginateDefinition = (
            (property_exists($this, 'simplePaginate') && $this->simplePaginate)
            || $this->filterModelCode()
        )
            ? 'simplePaginate' : 'paginate';

        return $this->graphQl->{$paginateDefinition}($pagination ?? $this->paginationHandler())->toArray();
    }

    /**
     * The filter detects whether there is model_code in the query data.
     *
     * @return bool
     */
    public function filterModelCode(): bool
    {
        return AppContainer::has('filterModelCode');
    }

    /**
     * set paginator property value for eloquent repository
     *
     * @param bool $value
     * @return void
     */
    public function setPaginator(bool $value = true): void
    {
        $this->paginator = $value;
    }

    /**
     * It collects all endpoint database queries in a container.
     *
     * @param object $instance
     * @return void
     */
    private function setEndpointQueries(object $instance): void
    {
        AppContainer::set('endpointQueries', [$instance->toFullSql()], true);
    }

    /**
     * @param object $builder
     * @param false $hash
     * @return mixed
     */
    public function toFullSql(object $builder, bool $hash = false): mixed
    {
        $sql = $builder->toFullSql();

        if ($hash) {
            return crc32($sql);
        }

        return $sql;
    }

    /**
     * get array data model repository
     *
     * @return array
     */
    public function toArray(): array
    {
        return $this->graphQl->get()->toArray();
    }

    /**
     * get pagination handler for repository model
     *
     * @return int
     */
    private function paginationHandler(): int
    {
        $limit = request()?->query('limit', $this->pagination);

        if (!is_numeric($limit)) {
            Exception::customException(trans('exception.limitException'));
        }

        if ($this->isAvailableSpecificPaginationLimit()) {
            $this->pagination = $this->limit;
        } else {
            $this->setPagination((int)$limit);
        }

        return $this->pagination;
    }

    /**
     * is available specific pagination limit
     *
     * @return bool
     */
    public function isAvailableSpecificPaginationLimit(): bool
    {
        return (property_exists($this, 'limit') && is_numeric($this->limit));
    }

    /**
     * set pagination value for repository model
     *
     * @param int $pagination
     * @return void
     */
    public function setPagination(int $pagination): void
    {
        if ($pagination <= $this->pagination) {
            $this->pagination = $pagination;
        } else {
            Exception::customException(trans('exception.limitExceedException'));
        }
    }

    /**
     * get limit model repository
     *
     * @param int $limit
     * @return object
     */
    public function limitation(int $limit): object
    {
        $this->repository = $this->instance()->limit($limit);

        return $this;
    }

    /**
     * get instance
     *
     * @param bool $repository
     * @return object
     */
    public function instance(bool $repository = true): object
    {
        if (is_null($this->repository)) {
            $this->repository = $this->instanceModel()->repository($this, $repository);
        }

        return $this->repository;
    }

    /**
     * get skip take limit model repository
     *
     * @param int $skip
     * @param int $take
     * @return object
     */
    public function skipTake(int $skip, int $take): object
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
    public function cache(mixed $tag, callable $callback): array
    {
        $this->setCacheTag($tag);
        $this->repository = $callback($this);

        return $this->useCache(function () {
            return $this->getRepository();
        });
    }

    /**
     * get repository results for model
     *
     * @param bool $afterLoadingRepository
     * @param bool $instance
     * @return array
     */
    public function getRepository(bool $afterLoadingRepository = true, bool $instance = false): array
    {
        if (is_null($this->repository)) {
            $this->repository = $this->instance();
        }

        if ($afterLoadingRepository && method_exists($this, 'afterLoadingRepository')) {
            $this->repository = $this->afterLoadingRepository();
        }

        $this->setEndpointQueries($this->repository);

        if ($instance) {
            return [$this->repository];
        }

        return $this->resourceRepository();
    }

    /**
     * after loading for repository
     *
     * @return object
     */
    public function afterLoadingRepository(): object
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
        $this->ensureColumnExists('status', $this->instance(), function () use ($builder) {
            $this->repository = $this->builder($builder)->where('status', 1);
        });

        $this->ensureColumnExists('is_deleted', $this->instance(), function () use ($builder) {
            $this->repository = $this->builder($builder)->where('is_deleted', 0);
        });

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
    public function ensureColumnExists($column, $builder, callable $callback): ?object
    {
        if (Db::ensureColumnExists($this->getModel(), $column)) {
            return $callback();
        }

        return $builder;
    }

    /**
     * get where query for model
     *
     * @param string $column
     * @param string|int $value
     * @param string $operator
     * @return object
     */
    public function where(string $column, string|int $value, string $operator = '='): object
    {
        if (!isValidIndex($this->getTable(), $column)) {
            return Exception::customException(trans('exception.filterException', ['key' => $column]));
        }

        $this->repository = $this->instance()->where($column, $operator, $value);

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
     * resource repository for eloquent model
     *
     * @return array
     */
    public function resourceRepository(): array
    {
        return $this->additionalResourceHandler(
            $this->baseResource($this->repository->get()->toArray())
        );
    }

    /**
     * set array deniedEagerLoadings eager loadings model repository
     *
     * @param string $value
     * @return void
     */
    public function setDeniedEagerLoadings(string $value): void
    {
        if (
            property_exists($this, 'deniedEagerLoadings')
            && is_array($this->deniedEagerLoadings)
        ) {
            $this->deniedEagerLoadings[] = $value;
        }
    }

    /**
     * create just model value for repository
     *
     * @param $value
     * @return object
     */
    public function createModel($value): object
    {
        return static::$model::create($value);
    }

    /**
     * create data for repository model
     *
     * @param array $data
     * @param bool $event
     * @return array|object
     */
    public function create(array $data = [], bool $event = true): array|object
    {
        return $this->setEventStatus($event)->createHandler($data);
    }

    /**
     * update data for repository model
     *
     * @param array $data
     * @param bool $id
     * @return array|object
     */
    public function update(array $data = [], bool $id = true): array|object
    {
        return $this->updateHandler($data, $id);
    }

    /**
     * get client data for create repository model
     *
     * @param array $data
     * @return array
     */
    public function getClientData(array $data = []): array
    {
        return count($data) ? $data : $this->setClientData();
    }

    /**
     * set client data for repository
     *
     * @return array
     */
    public function setClientData(): array
    {
        // when using the repository, we leave a record
        // in the container so that we can understand the client request.
        $this->setClientRepositoryRequest();

        return Client::data();
    }

    /**
     * get range scope for client
     *
     * @param object|null $builder
     * @param string|null $rangeMethod
     * @return object
     */
    public function rangeHandler(?object $builder = null, ?string $rangeMethod = null): object
    {
        $this->repository = $this->setClientAction([$rangeMethod])->builder($builder);

        return $this;
    }

    /**
     * @param array $data
     * @return $this
     */
    public function setClientAction(array $data = []): self
    {
        $clientInstance = getClientInstance();

        $request = [];

        foreach ($data as $name) {
            $clientActionName = Str::camel($name) . 'Action';
            if (method_exists($clientInstance, $clientActionName)) {
                $request = array_merge_recursive($clientInstance->$clientActionName());
            }
        }

        $request = array_merge_recursive(request()->query->all(), $request);
        request()->query->replace([]);
        request()->query->add($request);

        return $this;
    }

    /**
     * get all entries for model
     *
     * @return array
     */
    public function all(): array
    {
        return $this->instance()->get()->toArray();
    }

    /**
     * easy delete for repository model
     *
     * @param array $data
     * @return object|array
     */
    public function delete(array $data = []): object|array
    {
        return $this->notDeleted()->update(
            [
                array_merge($data,
                    [
                        'is_deleted' => true,
                        'deleted_by' => Authenticate::code(),
                        'deleted_at' => Date::now()->toDateTimeString()
                    ]
                )
            ]);
    }


    /**
     * it adds to builder not deleted data.
     *
     * @param object|null $builder
     * @return object
     */
    public function notDeleted(?object $builder = null): object
    {
        $this->ensureColumnExists('is_deleted', $this->instance(), function () use ($builder) {
            $this->repository = $this->builder($builder)->where('is_deleted', 0);
        });

        return $this;
    }

    /**
     * it adds to builder not deleted data.
     *
     * @param object|null $builder
     * @return object
     */
    public function deleted(?object $builder = null): object
    {
        $this->ensureColumnExists('is_deleted', $this->instance(), function () use ($builder) {
            $this->repository = $this->builder($builder)->where('is_deleted', 1);
        });

        return $this;
    }

    /**
     * get fakers for eloquent repository
     *
     * @return array
     */
    public function getFakers(): array
    {
        return (property_exists($this, 'fakers') && is_array($this->fakers)) ? $this->fakers : [];
    }

    /**
     * Determines whether the request
     * is itself based on the repository "code space" value.
     *
     * @param string $codeColumn
     * @return bool
     */
    public function isSelf(string $codeColumn): bool
    {
        return $this->getModelCode() === $codeColumn;
    }

    /**
     * get dummy data for eloquent repository
     *
     * @return array
     */
    public function dummy(): array
    {
        return (new Dummy($this))->dummy();
    }

    /**
     * get code instance for repository
     *
     * @param int $code
     * @return object
     */
    public function code(int $code = 0): object
    {
        return $this->where($this->getModelCode(), $code);
    }

    /**
     * get authenticate user instance for repository
     *
     * @return object
     */
    public function auth(): object
    {
        return $this->where(Authenticate::getCodeName(), Authenticate::code());
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
     * get event status for eloquent repository model
     *
     * @return bool
     */
    public function getEventStatus(): bool
    {
        return $this->eventStatus;
    }

    /**
     * set event status for eloquent repository model
     *
     * @param bool $status
     * @return EloquentRepository
     */
    public function setEventStatus(bool $status = true): EloquentRepository
    {
        $this->eventStatus = $status;

        return $this;
    }

    /**
     * easy increase column for repository model
     *
     * @param string $column
     * @param int|null $count
     * @return object|array
     */
    public function increase(string $column, ?int $count = null): object|array
    {
        return $this->update([[$column => ($count ?? 1)]]);
    }

    /**
     * easy decrease column for repository model
     *
     * @param string $column
     * @param string|null $count
     * @return object|array
     */
    public function decrease(string $column, ?string $count = null): object|array
    {
        return $this->update([[$column => ($count ?? '-1')]]);
    }

    /**
     * update data for repository model
     *
     * @param array $updateData
     * @param array $createData
     * @return array|object
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object
    {
        return $this->updateHandler($updateData, false, (count($createData) ? $createData : $updateData));
    }

    /**
     * get proxy closure for repository
     *
     * @param mixed $callback
     * @param string $method
     * @return mixed
     */
    public function proxy(mixed $callback, string $method = 'pagination'): mixed
    {
        return proxyClosure($callback, static function (EloquentRepository $repository) use ($method) {
            return $repository->$method();
        });
    }

    /**
     * get select columns instance for repository
     *
     * @param array $data
     * @return object
     */
    public function select(array $data = []): object
    {
        $this->repository = $this->instance()->select($data);

        return $this;
    }

    /**
     * @param int $id
     * @param array $select
     * @return array
     */
    public function find(int $id, array $select = ['*']): array
    {
        $find = $this->instance()->find($id, $select);

        return $find ? $find->toArray() : [];
    }

    /**
     * take the latest data for repository
     *
     * @return array
     */
    public function latest(): array
    {
        $this->repository = $this->instance()->orderBy('id', 'desc')->take(1);

        return ($this->getRepository())[0] ?? [];
    }

    /**
     * checks if the data is available
     *
     * @param $field
     * @param $value
     * @return bool
     */
    public function exists($field, $value): bool
    {
        $mirror = $this->instance()->where($field, $value);
        $query = $mirror->get()->toArray();

        AppContainer::setWithTerminating('repository.mirror.builder.' . $this->getModelName(), $mirror);
        AppContainer::setWithTerminating('repository.mirror.recursive.builder.' . $this->getModelName() . '_' . $value, $mirror);

        if (isset($query[0])) {
            AppContainer::setWithTerminating('repository.mirror.data.' . $this->getModelName(), $query[0]);
            AppContainer::setWithTerminating('repository.mirror.recursive.data.' . $this->getModelName() . '_' . $value, $query[0]);
        }

        return isset($query[0]);
    }

    /**
     * get mirror for repository
     *
     * @param string|null $mirror
     * @param string $type
     * @return mixed
     */
    public function getMirror(?string $mirror = null, string $type = 'data'): mixed
    {
        return AppContainer::get('repository.mirror.' . $type . '.' . ($mirror ? ucfirst($mirror) : $this->getModelName()));
    }

    /**
     * get mirror for repository
     *
     * @param string|null $mirror
     * @param mixed $value
     * @param string $type
     * @return mixed
     */
    public function getRecursiveMirror(?string $mirror = null, mixed $value = null, string $type = 'data'): mixed
    {
        return AppContainer::get('repository.mirror.recursive.' . $type . '.' . ($mirror ? ucfirst($mirror) : $this->getModelName()) . '_' . $value);
    }

    /**
     * get entity
     *
     * @return mixed
     */
    public function entity(): mixed
    {
        $camelCaseModel = Str::camel($this->getModelName());

        return entity()->{$camelCaseModel}((object)$this->first());
    }

    /**
     * take the find code data for repository
     *
     * @return array
     */
    public function first(): array
    {
        $first = $this->instance()->first();

        return !is_null($first) ? $first->toArray() : [];
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
     * take cache for eloquent model
     *
     * @param bool $afterLoadingRepository
     * @return array
     */
    public function memory(bool $afterLoadingRepository = true): array
    {
        $this->getRepository($afterLoadingRepository, true);

        if (!$this->checkCacheMemoryStatus()) {
            return $this->resourceRepository();
        }

        $sql = $this->repository->toFullSql();

        return getCache($this->generateCacheKey($this->getModelName()), md5($sql), function () {
            return $this->resourceRepository();
        });
    }

    /**
     * get sequence model for client
     *
     * @param object|null $builder
     * @return object
     */
    public function sequence(?object $builder = null): object
    {
        $this->ensureColumnExists('sequence_time', $this->instance(), function () use ($builder) {
            $this->repository = $this->builder($builder)->orderBy('sequence_time', 'desc');
        });

        $this->ensureColumnExists('sequence', $this->instance(), function () use ($builder) {
            $this->repository = $this->builder($builder)->orderBy('sequence', 'asc');
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
        $this->repository = $this->builder($builder)->orderBy('id', 'desc');

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
        $this->repository = $this->builder($builder)->orderBy('id', 'asc');

        return $this;
    }

    /**
     * get ranges
     *
     * @return array
     */
    public function getRanges(): array
    {
        return $this->ranges ?? [];
    }

    /**
     * apply method for repository
     *
     * @param object|null $builder
     * @param bool $globalScope
     * @return object
     */
    public function apply(?object $builder = null, bool $globalScope = true): object
    {
        AppContainer::setWithTerminating('globalScope', $globalScope);

        return $builder ?? $this->globalScope();
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
     * get values being 1 or 0 for is_default column for model
     *
     * @param int $value
     * @return object
     */
    public function default(int $value = 1): object
    {
        $this->repository = $this->instance()->where('is_default', $value);

        return $this;
    }

    /**
     * throw exception if not exist columns for database
     *
     * @param $column
     * @param callable $callback
     * @return object
     */
    public function throwExceptionIfColumnNotExist($column, callable $callback): object
    {
        if (!Db::ensureColumnExists($this->getModel(), $column)) {
            return Exception::customException($column . ' column name is not valid');
        }

        return $callback();
    }

    /**
     * throws sql exception for repository
     *
     * @param Throwable $throwable
     * @return mixed
     */
    public function sqlException(Throwable $throwable): mixed
    {
        return SqlExceptionManager::make($throwable, $this->getTable(), static function () use ($throwable) {
            return Exception::modelCreateException(
                is_null($throwable->getPrevious()) ? $throwable->getMessage() : $throwable->getPrevious()?->getMessage()
            );
        });
    }

    /**
     * get hitter property values for repository
     *
     * @return array
     */
    public function getHitter(): array
    {
        if (property_exists($this, 'hitter')) {
            return $this->hitter;
        }

        return [];
    }

    /**
     * get updateOrCreate property values for repository
     *
     * @return bool
     */
    public function getUpdateOrCreate(): bool
    {
        return property_exists($this, 'updateOrCreate') && $this->updateOrCreate;
    }

    /**
     * get updateOrCreate property values for repository
     *
     * @return bool
     */
    public function getHardDelete(): bool
    {
        return property_exists($this, 'hardDelete') && $this->hardDelete;
    }

    /**
     * get collects for repository
     *
     * @return array
     */
    public function getCollects(): array
    {
        if (property_exists($this, 'collects') && is_array($this->collects)) {
            return $this->collects;
        }

        return [];
    }

    /**
     * get group by fields for repository
     *
     * @return array
     */
    public function getGroupByFields(): array
    {
        if (property_exists($this, 'groupByFields') && is_array($this->groupByFields)) {
            return $this->groupByFields;
        }

        return [];
    }

    /**
     * get group by process fields for repository
     *
     * @return array
     */
    public function getGroupByProcessFields(): array
    {
        if (property_exists($this, 'groupByProcessFields') && is_array($this->groupByProcessFields)) {
            return $this->groupByProcessFields;
        }

        return [];
    }

    /**
     * get addPostQueries fields for repository
     *
     * @return array
     */
    public function getAddPostQueries(): array
    {
        if (property_exists($this, 'addPostQueries') && is_array($this->addPostQueries)) {
            return $this->addPostQueries;
        }

        return [];
    }

    /**
     * get,create,put operations are blocked for the specified apiKey values.
     *
     * @param array $apiKeys
     * @return void
     */
    public function apiKeyRestrictions(array $apiKeys = []): void
    {
        if (in_array(ApiKey::who(), $apiKeys, true)) {
            Exception::customException('apiKeyRestrictions', ['key' => ApiKey::who()]);
        }
    }

    /**
     * get __call method for eloquent repository
     *
     * @param string $name
     * @param array $args
     * @return object|null
     */
    public function __call(string $name, array $args = []): ?object
    {
        if (Str::startsWith($name, 'with')) {
            $model = str_replace('with', '', $name);
            return $this->eagerLoadingHandler($model, $args);
        }

        if (in_array($snakeName = Str::snake($name), $this->getColumns(), true)) {
            if (!in_array($snakeName, $this->getIndexes(), true)) {
                Exception::filterException(true, ['key' => $snakeName]);
            }

            $this->repository = $this->instance()->where($snakeName, $args[0] ?? null);
        }

        if (in_array($name, $this->getModelWithValues(), true)) {
            if (isset($args[0]) && is_string($args[0])) {
                if (request()?->method() === $args[0]) {
                    $this->withBindings[$name] = (static function ($query) {
                    });
                    $this->with();
                }

                return $this;
            }

            $this->withBindings[$name] = ($args[0] ?? static function ($query) {
            });
            $this->with();
        }

        return $this;
    }

    /**
     * get eager loading handler for eloquent repository
     *
     * @param string $model
     * @param array $args
     * @return object
     */
    public function eagerLoadingHandler(string $model, array $args = []): object
    {
        $withKey = Str::camel($model);
        $model = getModelWithPlural($model);

        $modelInstance = $args[0] ?? $this->instanceModel();
        $modelNamespace = Constants::modelNamespace . '\\' . $model;

        return $this->setEagerLoading($modelNamespace, function () use ($modelNamespace, $modelInstance, $model, $withKey) {
            $queries = (method_exists($modelInstance, 'getWithQueries')) ? $modelInstance->getWithQueries() : [];
            $list = $queries[$withKey] ?? [];

            $repository = $this->findRepositoryByModel($model);
            $getLocalizations = $repository->getLocalizations();

            return $modelInstance->hasMany(
                $modelNamespace,
                ($list['foreignColumn'] ?? null),
                ($list['localColumn'] ?? null)
            )->loadRepository($this)->with((count($getLocalizations) ? 'localization' : []));
        });
    }

    /**
     * set eager loading for repository
     *
     * @param string|null $model
     * @param callable $callback
     * @return object
     */
    public function setEagerLoading(?string $model, callable $callback): object
    {
        $model = $model ?? $this->getModelName();

        $repositoryName = lcfirst(class_basename(
                $repository = $this->findRepositoryByModel($model))
        );

        return $repository->$repositoryName($repository->globalScope(
            $callback()
        ));
    }

    /**
     * find repository by model
     *
     * @param $model
     * @return object
     */
    public function findRepositoryByModel($model): object
    {
        $modelName = getModelName($model);
        return Repository::$modelName();
    }

    /**
     * make eager loading via instance model
     *
     * @param bool $repository
     * @return object
     */
    public function with(bool $repository = true): object
    {
        $this->repository = $this->instanceModel()->repository($this, $repository)->with($this->withBindings);

        return $this;
    }

    /**
     * get columns for model
     *
     * @return array
     */
    public function getColumns(): array
    {
        return Db::columns($this->getTable());
    }

    /**
     * get columns for model
     *
     * @return array
     */
    public function getIndexes(): array
    {
        return Db::indexes($this->getTable());
    }

    /**
     * get required columns for model
     *
     * @return array
     */
    public function getRequiredColumns(): array
    {
        return Db::requiredColumns($this->getTable());
    }

    /**
     * get column types for model
     *
     * @return array
     */
    public function getColumnTypes(): array
    {
        return Db::types($this->getTable());
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
     * @param string|null $method
     * @return array|object
     */
    public function client(?string $method = null): object|array
    {
        $method = $method ?? httpMethod();

        return Client::object($this->getModelName(), Client::$methods[$method]);
    }

    /**
     * get client convert for changed model for repository
     *
     * @param string $defaultModel
     * @return void
     */
    public function oppositeModelClientConverter(string $defaultModel): void
    {
        new OppositeModelClientConverter($this, $defaultModel);
    }
}
