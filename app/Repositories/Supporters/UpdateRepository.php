<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Exceptions\Exception;
use App\Libs\AppContainer;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Trait UpdateRepository
 * @package App\Repositories\Executors
 */
trait UpdateRepository
{
    /**
     * update data for user model
     *
     * @param array $data
     * @param bool $id
     * @param array $create
     * @return array|object
     */
    public function updateHandler(array $data = [], bool $id = true, array $create = []): array|object
    {
        $queryList = [];

        $updateClientData = $this->getClientData($data);
        $clientNormalData = AppContainer::get('clientBody', []);

        if ($this->getEventStatus() && method_exists($this, 'beforeUpdate')) {
            $this->beforeUpdate($clientNormalData);
        }

        if (!count($data) && isset($clientNormalData[0]) && count($clientNormalData[0]) < 2) {
            Exception::customException('clientNormalDataException');
        }

        foreach ($updateClientData as $dataKey => $data) {
            $baseQuery = $this->getBaseQueryForUpdate($data, $id, (int)($data[$this->getModelCode()] ?? 0));
            $modelMirror = null;
            if (isset($data[$this->getModelCode()])) {
                $modelMirror = $this->getRecursiveMirror(Str::camel($this->getModelName()), $data[$this->getModelCode()]);
            }

            if (!is_null($modelMirror)) {
                $oldData = [$modelMirror];
            } else {
                $oldData = $baseQuery->get()->toArray();
            }

            if ($this->getEventStatus() && method_exists($this, 'eventFireBeforeUpdate')) {
                $eventFireBeforeUpdate = $this->eventFireBeforeUpdate($data, ($oldData[0] ?? []));

                if(is_array($eventFireBeforeUpdate)){
                    $data = $eventFireBeforeUpdate;
                }
            }

            if (
                !isset($oldData[0])
                && $id === false
                && count($create)
            ) {
                return $this->create($create);
            }

            if (!$id && count($create) && isset($data[getTableCode($this->getModel())])) {
                unset($data[getTableCode($this->getModel())]);
            }

            if (!isset($oldData[0]) && !count($create) && $this->getUpdateOrCreate()) {
                return $this->create([$data]);
            }


            try {

                if ($this->getHardDelete()) {
                    $update = $baseQuery->delete();
                } else {

                    $update = $baseQuery->update(
                        $this->checkColumnsForUpdate($this->hitterProcess($data, $dataKey))
                    );
                }

                if ($update == '0') {
                    return Exception::updateException('', ['model' => $this->getModelName()]);
                }

                $this->updateEventDispatcher($oldData, $data);
                $this->addPostQueryDispatcher($data, $dataKey);

            } catch (\Exception $exception) {
                return $this->sqlException($exception);
            }

            //general operations
            $result = $this->resourceHandled($this->hardDeleteOperation($oldData, $data));
            $queryList[] = $this->addPostQueryMerging($result, $dataKey);

            if ($this->getEventStatus() && method_exists($this, 'eventFireAfterUpdate')) {
                $this->eventFireAfterUpdate($result, $data);
            }
        }

        if ($this->getEventStatus() && method_exists($this, 'afterUpdate')) {
            $this->afterUpdate($queryList);
        }

        return $queryList;
    }

    /**
     * get base query for update model
     *
     * @param array $data
     * @param bool $id
     * @param int|null $mirror
     * @return object
     */
    public function getBaseQueryForUpdate(array $data = [], bool $id = true, ?int $mirror = null): object
    {
        $modelBuilder = $this->getRecursiveMirror(Str::camel($this->getModelName()), $mirror, 'builder');

        if (!is_null($modelBuilder)) {
            return $modelBuilder;
        }

        return $this->instance()->where(function (Builder $builder) use ($data, $id) {
            $modelCode = Str::snake($this->getModelName()) . '_code';
            if (isset($data[$modelCode]) && $id === true) {
                $builder->where($modelCode, intval(($data[$modelCode] ?? 0)));
            }
        });
    }

    public function checkColumnsForUpdate(array $data = []): array
    {
        $list = [];

        foreach ($data as $key => $value) {
            if (in_array($key, $this->getColumns(), true)) {
                $list[$key] = $value;
            }
        }

        return $list;
    }

    /**
     * get hitter process for repository model
     *
     * @param array $data
     * @param int $key
     * @return array
     */
    public function hitterProcess(array $data = [], int $key = 0): array
    {
        if (
            property_exists($this, 'hitter')
            && is_array($this->hitter)
            && count($this->hitter)
        ) {
            foreach ($this->hitter as $hit) {
                if (isset($data[$hit])) {
                    $operator = AppContainer::has('repositoryHitter.' . $key . '.' . $hit)
                        ? AppContainer::get('repositoryHitter.' . $key . '.' . $hit)
                        : '+';
                    $data[$hit] = DB::raw('' . $hit . '' . $operator . '' . $data[$hit]);
                }
            }
        }

        return $data;
    }

    /**
     * get update event dispatcher for repository
     *
     * @param array $oldData
     * @param array $newData
     */
    public function updateEventDispatcher(array $oldData = [], array $newData = []): void
    {
        $this->createTableChanges(($oldData[0] ?? []), $newData);
        $this->updateLocalization($newData);
        $this->deleteCache();
        $this->updateCountableHandler($oldData[0], $newData, 'decrease');
    }

    /**
     * create table changes for model
     *
     * @param array $oldData
     * @param array $newData
     */
    public function createTableChanges(array $oldData = [], array $newData = []): void
    {
        //
    }

    /**
     * auto countable model repository handler
     *
     * @param array $oldData
     * @param array $newData
     * @return void
     */
    public function updateCountableHandler(array $oldData = [], array $newData = []): void
    {
        if (count($this->getCountable())) {
            foreach ($this->getCountable() as $field => $repository) {
                $countableRepository = Repository::$repository();
                $countableModelCode = $countableRepository->getModelCode();
                $repositoryUpdateQuery = $countableRepository->where($countableModelCode, $oldData[$countableModelCode]);

                if (isset($newData[$countableModelCode]) && $oldData[$countableModelCode] !== $newData[$countableModelCode]) {
                    $repositoryUpdateQuery->decrease($field);
                    Repository::$repository()->where($countableModelCode, $newData[$countableModelCode])->increase($field);
                } elseif ((isset($newData['status']) && !$newData['status']) || (isset($newData['is_deleted']) && $newData['is_deleted'])) {
                    $repositoryUpdateQuery->decrease($field);
                } elseif ((isset($newData['status']) && $newData['status'] === true)) {
                    $repositoryUpdateQuery->increase($field);
                }
            }
        }
    }

    /**
     * get hard delete operation
     *
     * @param array $oldData
     * @param $data
     * @return mixed
     */
    private function hardDeleteOperation(array $oldData, $data): mixed
    {
        return ($this->getHardDelete())
            ? (($oldData)[0] ?? [])
            : array_replace_recursive((($oldData)[0] ?? []), $data);
    }

    /**
     * get post query merging operation
     *
     * @param array $result
     * @param $dataKey
     * @return array
     */
    private function addPostQueryMerging(array $result, $dataKey): array
    {
        return (count($this->addPostQueryResults))
            ? array_merge($result, $this->addPostQueryResults[$dataKey])
            : $result;
    }
}
