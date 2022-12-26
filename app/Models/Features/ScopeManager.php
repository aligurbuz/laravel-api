<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Constants;
use App\Exceptions\Exception;
use App\Repositories\Repository;
use App\Services\AppContainer;
use App\Services\Db;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

/**
 * Trait ScopeManager
 * @package App\Models\Features
 */
trait ScopeManager
{
    use FullTextSearch, WithProcess, ScopeManagerTrait, GroupByProcess;

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
     * @var array|string[]
     */
    protected array $orderByStrings = ['asc', 'desc'];

    /**
     * @var string[]
     */
    protected array $operators = ['<', '>', '<=', '>=', '<>', '=', 'or'];

    /**
     * get active scope for model
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeActive(Builder $builder): object
    {
        return $builder->where('status', 1)->where('is_deleted', 0);
    }

    /**
     * get notDeleted scope for model
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeNotDeleted(Builder $builder): object
    {
        return $builder->where('is_deleted', false);
    }

    /**
     * get notDeleted scope for model
     *
     * @param Builder $builder
     * @param array $scope
     * @return Builder
     */
    public function scopeAddToEnd(Builder $builder, array $scope = []): object
    {
        AppContainer::setWithTerminating(Constants::addScopeToEnd, $scope);

        return $builder;
    }

    /**
     * get client scope data for model
     *
     * @param Builder $builder
     * @param object $object
     * @param null|string $data
     * @return object
     */
    public function scopeRange(Builder $builder, object $object, mixed $data = null): object
    {
        $rangeHandler = $this->rangeContainer($object, $data);

        foreach (($rangeHandler['ranges'] ?? []) as $data) {
            if (array_key_exists($data, ($rangeHandler['modelRanges'] ?? [])) && method_exists($object, $data)) {
                $object->$data($builder);
            } elseif (array_key_exists($data, ($rangeHandler['modelRanges'] ?? [])) && method_exists($object, 'rangeHandler')) {
                $object->rangeHandler($builder, $data);
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
    public function scopeRepository(Builder $builder, object $object, bool $repository = true): object
    {
        if (!consoleAuthorizationStatus()) $repository = false;

        $objectName = lcfirst(class_basename($object));

        // if there is a method with the same name as object,
        // this method will be executed automatically.
        if (method_exists($object, $objectName)) return $repository ? $object->$objectName() : $builder;

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

        if (is_null($term)) return $builder;

        $columns = implode(',', $this->searchable);

        $searchableTerm = $this->fullTextWildcards($term);

        return $builder->whereRaw("MATCH (" . $columns . ") AGAINST (? IN BOOLEAN MODE)", $searchableTerm);
    }

    /**
     * set instruction for response
     *
     * @param Builder $builder
     * @return Builder
     */
    public function scopeInstruction(Builder $builder): Builder
    {
        if (property_exists($this, 'withQuery') && is_array($this->withQuery)) {
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
    public function scopeGroupByQuery(Builder $builder): object
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

        if (isset($params['select'])) {
            $paramsSelect = explode(',', $params['select']);
            $select = $this->checkSelectColumn(
                array_merge($this->withSelects, $paramsSelect)
            );

            if (is_array($select) && count($select)) {
                return $builder->select($select);
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
        $tableName = $table ?? $this->getTable();

        $columns = Db::columns(Str::snake($tableName));

        foreach ($select as $item) {
            if (!in_array($item, $columns)) {
                Exception::selectException('', ['key' => $item]);
                return [];
            }
        }

        return $select;
    }

    /**
     * get active data for model
     *
     * @param Builder $builder
     * @param array $data
     * @return Builder
     */
    public function scopeOrderByQuery(Builder $builder, array $data = []): Builder
    {
        $params = count($data) ? $data : request()->query->all();

        if (isset($params['orderBy'])) {
            $orderBy = explode(',', $params['orderBy']);
            $this->getRepository()->throwExceptionIfColumnNotExist($orderBy[0], function () use ($builder, $orderBy) {
                $orderByString = ($orderBy[1] ?? 'asc');
                $orderByString = in_array($orderByString, $this->orderByStrings, true)
                    ? $orderByString : Exception::customException('orderByString');

                return $builder->orderBy($orderBy[0], $orderByString);
            });
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
    public function scopeFilterQuery(Builder $builder, array $data = []): object
    {
        $params = count($data) ? ['filter' => $data] : request()->query->all();
        $indexes = Db::indexes($this->getTable());
        //$globalScopes = config('repository.globalScopes');

        if (isset($params['filter'])) {
            $builderSql = $builder->toSql();
            $builder->where(function ($query) use ($params, $indexes, $builderSql) {
                $filtering = indexOrdering($this->getTable(), $params['filter']);
                foreach ($filtering as $key => $value) {
                    if (!in_array($key, $indexes)) {
                        if (!property_exists($this, 'filterException') || $this->filterException) {
                            Exception::filterException('', ['key' => $key]);
                        }
                    }

                    $sqlContains = '`' . $key . '` = ?';
                    if (Str::contains($builderSql, $sqlContains)) {
                        continue;
                    }

                    if (!in_array($key, Db::columns($this->getTable()))) {
                        break;
                    }

                    if (is_array($value)) {
                        foreach ($value as $operator => $item) {
                            if (in_array($operator, $this->operators)) {
                                if ($operator === 'or') {
                                    $withOperator = $query->orWhere($key, $item);
                                } else {
                                    $withOperator = $query->where($key, $operator, $item);
                                }
                            } else {
                                Exception::customException(trans('exception.sqlOperatorException', ['key' => $operator]));
                            }
                        }
                    }

                    if (!isset($withOperator) && (is_string($value) || is_numeric($value))) {
                        $query->whereIn($key, explode(',', (string)$value));
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
     */
    public function scopeHasFilterQuery(Builder $builder)
    {
        $query = request();
        $hasQuery = $query->query('has');

        if (is_null($hasQuery)) {
            $filter = $query->query('hasFilter', []);

            foreach ($filter as $relation => $data) {
                $this->scopeHasQuery($builder, $relation);
            }
        }
    }

    /**
     * get eager loading data for model
     *
     * @param Builder $builder
     * @param string|null $has
     * @param array $filter
     * @param bool $recursive
     * @return Builder
     */
    public function scopeHasQuery(Builder $builder, ?string $has = null, array $filter = [], bool $recursive = true): Builder
    {
        if (count($filter)) {
            assignQueryParameters(['hasFilter' => [$has => $filter]], $recursive);
        }

        $request = request()->query->all();

        $params = (!is_null($has))
            ? ['has' => $has]
            : $request;

        if (isset($params['has'])) {
            $withQuery = $this->withQuery;
            $hasQuery = explode(',', $params['has']);
            $this->hasValues = $hasQuery;

            foreach ($hasQuery as $has) {
                $hasQueryList = explode(':', $has);
                $currentHasSplit = explode('-', current($hasQueryList));
                $has = current($currentHasSplit);

                if (method_exists($this, $has)) {
                    $builder->whereHas($has, function (object $builder) {
                        return $builder;
                    });
                } elseif (isset($withQuery[$has], $withQuery[$has]['nested'])) {
                    if (false === $withQuery[$has]['nested']) {
                        $builder->whereHas($has, function (object $builder) use ($request, $has, $recursive, $hasQueryList, $currentHasSplit) {
                            $range = $request['hasRange'][$has] ?? ($request['range'] ?? '');
                            $hasFilter = $request['hasFilter'][$has] ?? [];

                            if (count($currentHasSplit) > 1) {
                                $currentHasSplitData = $currentHasSplit[3] ?? ($currentHasSplit[2] ?? 0);
                                $currentHasSplitOperator = isset($currentHasSplit[3]) ? $currentHasSplit[2] : '=';
                                $hasFilter = [$currentHasSplit[1] => [
                                    $currentHasSplitOperator => $currentHasSplitData
                                ]];
                            }

                            if (isset($request['hasFilter']) && count($hasFilter) == '0') {
                                Exception::customException(trans('exception.hasFilterException', ['key' => $has]));
                                return $builder;
                            }

                            $repository = getModelWithPlural($has);
                            $repositoryMethod = Repository::$repository();

                            if (isset($hasQueryList[2])) {
                                Exception::customException('recursiveHasException');
                            }

                            if (isset($hasQueryList[1])) {
                                $recursiveHasValue = explode('-', $hasQueryList[1]);
                                $recursiveHasValueData = $recursiveHasValue[3] ?? ($recursiveHasValue[2] ?? 0);
                                $recursiveHasValueOperator = isset($recursiveHasValue[3]) ? $recursiveHasValue[2] : '=';

                                if (count($hasFilter)) {
                                    $builder->hasQuery(current($recursiveHasValue), isset($recursiveHasValue[1]) ? [
                                        $recursiveHasValue[1] => [$recursiveHasValueOperator => $recursiveHasValueData]
                                    ] : [], false)->range($repositoryMethod, (string)$range)
                                        ->filterQuery($hasFilter);
                                } else {
                                    $builder->hasQuery(current($recursiveHasValue), isset($recursiveHasValue[1]) ? [
                                        $recursiveHasValue[1] => [$recursiveHasValueOperator => $recursiveHasValueData]
                                    ] : [], false)->range($repositoryMethod, (string)$range);
                                }


                            }

                            if (isset($request['hasRecursiveFilter'][$has])) {
                                foreach ($request['hasRecursiveFilter'][$has] as $recursiveHas => $recursiveFilter) {
                                    if (count($hasFilter)) {
                                        $builder->hasQuery($recursiveHas, $recursiveFilter, false)->range($repositoryMethod, (string)$range)
                                            ->filterQuery($hasFilter);
                                    } else {
                                        $builder->hasQuery($recursiveHas, $recursiveFilter, false)->range($repositoryMethod, (string)$range);
                                    }


                                    break;
                                }
                            } else {

                                if (count($hasFilter)) {
                                    $builder->range($repositoryMethod, (string)$range)
                                        ->filterQuery($hasFilter);
                                } else {
                                    $builder->range($repositoryMethod, (string)$range);
                                }
                            }

                            return $builder;
                        });
                    }
                } else {
                    Exception::customException(trans('exception.hasException', ['key' => $has]));
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

        if (isset($params['doesntHave'])) {
            $withQuery = $this->withQuery;
            $doesntHaveQuery = explode(',', $params['doesntHave']);
            $this->doesntHaveValues = $doesntHaveQuery;

            foreach ($doesntHaveQuery as $doesnt) {
                if (method_exists($this, $doesnt)) {
                    $builder->whereDoesntHave($doesnt, function (object $builder) use ($params, $doesnt) {
                        $range = $params['hasRange'][$doesnt] ?? ($params['range'] ?? '');
                        $repository = getModelWithPlural($doesnt);
                        $builder->range(Repository::$repository(), (string)$range);
                        return $builder;
                    });
                } elseif (isset($withQuery[$doesnt], $withQuery[$doesnt]['nested']) && false === $withQuery[$doesnt]['nested']) {
                    $builder->whereDoesntHave($doesnt, function (object $builder) use ($params, $doesnt) {
                        $range = $params['hasRange'][$doesnt] ?? ($params['range'] ?? '');
                        $repository = getModelWithPlural($doesnt);
                        $builder->range(Repository::$repository(), (string)$range);
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
    public function scopeWithQuery(Builder $builder, array $with = []): object
    {
        return $this->withProcessHandler($builder, $with);
    }
}
