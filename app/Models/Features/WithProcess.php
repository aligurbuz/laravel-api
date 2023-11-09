<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Exceptions\Exception;
use App\Factory\App\App;
use App\Repositories\Repository;
use App\Services\AppContainer;
use Illuminate\Database\Eloquent\Builder;

/**
 * Trait withProcess
 * @property array withQuery
 * @property $this withSelects
 * @property $this hasValues
 * @property $this doesntHaveValues
 * @method $this checkSelectColumn(array $select = [], ?string $table = null)
 * @package App\Models\Features
 */
trait WithProcess
{
    /**
     * @var array
     */
    protected array $withRangeKeyString = [];

    /**
     * get eager loading data for model
     *
     * @param Builder $builder
     * @param array $with
     * @param bool $nested
     * @return object
     */
    public function withProcessHandler(Builder $builder, array $with = [], bool $nested = false): object
    {
        $params = request()->query->all();

        $params['with'] = (count($with)) ? $with : ($params['with'] ?? []);

        if (isset($params['with'])) {
            $withQuery = $this->withQuery;

            if (is_array($params['with']) && count($params['with'])) {
                foreach ($params['with'] as $with => $select) {
                    if (!$nested) {
                        AppContainer::terminate('withRangeKeyString');
                    }

                    $select = (is_array($select) && isset($select['select'])) ? $select['select'] : $select;

                    if (!is_string($select)) {
                        return Exception::withSelectException();
                    }

                    if (
                        isset(
                            $withQuery[$with],
                            $withQuery[$with]['foreignColumn'],
                            $withQuery[$with]['localColumn'],
                            $withQuery[$with]['table']
                        )
                    ) {
                        $localColumn = $withQuery[$with]['localColumn'];
                        $foreignColumn = $withQuery[$with]['foreignColumn'];
                        $foreignRepository = $withQuery[$with]['repository'] ?? null;

                        $this->withSelects[] = $localColumn;

                        if (strlen($select) > 0 && $select !== '*') {
                            $selectExplode = explode(',', $select);
                            $foreignRepositoryInstance = Repository::$foreignRepository();
                            $foreignRepositoryLocalization = $foreignRepositoryInstance->getLocalizations();

                            if (count($foreignRepositoryLocalization)) {
                                $selectExplode[] = $foreignRepositoryInstance->getModelCode();
                            }

                            $selectExplode = $this->checkSelectColumn(
                                array_merge([$foreignColumn], $selectExplode)
                                , $withQuery[$with]['table']
                            );

                            $this->withQueryBySelect($builder, $with, $selectExplode, $params, $foreignRepository);
                        } else {
                            $this->withQueryWithoutSelect($builder, $with, $params, $foreignRepository, $nested);
                        }

                    } else {
                        return Exception::withException();
                    }
                }
            }
        }

        return $builder;
    }

    /**
     * handler with query by select for model
     *
     * @param $builder
     * @param $with
     * @param $selectExplode
     * @param $params
     * @param $foreignRepository
     * @param bool $nested
     */
    private function withQueryBySelect($builder, $with, $selectExplode, $params, $foreignRepository, bool $nested = false)
    {
        $builder->with([$with => function ($query) use ($with, $selectExplode, $params, $foreignRepository, $nested) {
            $withRange = $params['withRange'][$with] ?? ($params['range'] ?? '');
            $repositoryInstance = Repository::$foreignRepository();

            $filter = [];

            if (isset($params['with'][$with]['filter'])) {
                $filter = (array)$params['with'][$with]['filter'];
            }

            $nestedWithRangeRule = $this->getNestedWithRangeRule($with, $nested);

            if (!is_null($nestedWithRangeRule)) {
                $withRange = $nestedWithRangeRule;
            }

            if (isset($params['with'][$with]['with'])) {
                if (is_array($params['with'][$with]['with'])) {
                    $selectExplode[] = getTableCode($with);
                }

                foreach ($params['with'][$with]['with'] as $nestedKey => $nestedWith) {
                    if (in_array($nestedKey, (array)$this->hasValues, true)) {
                        $query->hasQuery($nestedKey);
                    }

                    if (in_array($nestedKey, (array)$this->doesntHaveValues, true)) {
                        $query->doesntHaveQuery($nestedKey);
                    }
                }

                $query->withQuery($params['with'][$with]['with']);
            }

            if (count($filter)) {
                $query->filterQuery($filter);
            }

            $query->select($selectExplode);
            $query->range($repositoryInstance, $withRange);

        }]);
    }

    /**
     * handler with query without select for model
     *
     * @param $builder
     * @param $with
     * @param $params
     * @param $foreignRepository
     */
    private function withQueryWithoutSelect($builder, $with, $params, $foreignRepository, bool $nested = false)
    {
        $builder->with([$with => function ($query) use ($with, $params, $foreignRepository, $nested) {
            $withRange = $params['withRange'][$with] ?? ($params['range'] ?? '');
            $repositoryInstance = Repository::$foreignRepository();

            $filter = [];

            if (isset($params['with'][$with]['filter'])) {
                $filter = (array)$params['with'][$with]['filter'];
            }

            if (isset($params['with'][$with]['has'])) {
                $query->hasQuery($params['with'][$with]['has']);
            }

            if (isset($params['with'][$with]['doesntHave'])) {
                $query->hasQuery($params['with'][$with]['doesntHave']);
            }

            $nestedWithRangeRule = $this->getNestedWithRangeRule($with, $nested);

            if (!is_null($nestedWithRangeRule)) {
                $withRange = $nestedWithRangeRule;
            }

            if (isset($params['with'][$with]['with'])) {
                $query->withQuery($params['with'][$with]['with'], true);
            }

            if (count($filter)) {
                $query->filterQuery($filter);
            }

            $query->range($repositoryInstance, $withRange);

        }]);
    }

    protected function getNestedWithRangeRule(string $with, bool $nested = false): ?string
    {
        if (!AppContainer::has('withRangeKeyString')) {
            AppContainer::set('withRangeKeyString', $with);
        }

        if ($nested) {
            $withRangeKeyString = AppContainer::get('withRangeKeyString');
            $withRangeKeyString = $withRangeKeyString . '.' . $with;
            AppContainer::setWithTerminating('withRangeKeyString', $withRangeKeyString);
            $withRangeKeyStringNew = AppContainer::get('withRangeKeyString');
            $withRangeClientValues = request()->get('withRange', []);

            if (isset($withRangeClientValues[$withRangeKeyStringNew])) {
                return $withRangeClientValues[$withRangeKeyStringNew];
            }
        }

        return null;
    }
}
