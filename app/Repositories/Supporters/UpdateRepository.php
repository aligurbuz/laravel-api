<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Exceptions\Exception;
use App\Services\AppContainer;
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
     * get base query for update model
     *
     * @param array $data
     * @param bool $id
     * @return object
     */
    public function getBaseQueryForUpdate(array $data = [], bool $id = true): object
    {
        return $this->instance()->where(function (Builder $builder) use ($data, $id) {
            $modelCode = Str::snake($this->getModelName()) . '_code';
            if (isset($data[$modelCode]) && $id === true) {
                $builder->where($modelCode, intval(($data[$modelCode] ?? 0)));
            }
        });
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

    public function checkColumnsForUpdate(array $data = [])
    {
        $list = [];

        foreach ($data as $key => $value){
            if(in_array($key,$this->getColumns(),true)){
                $list[$key] = $value;
            }
        }

        return $list;
    }

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
        $clientNormalData = AppContainer::get('clientBody',[]);

        foreach ($updateClientData as $dataKey => $data) {
            if(isset($clientNormalData[0]) && count($clientNormalData[0])<2){
                Exception::customException('clientNormalDataException');
            }

            $baseQuery = $this->getBaseQueryForUpdate($data, $id);
            $oldData = $baseQuery->get()->toArray();

            if (method_exists($this, 'eventFireBeforeUpdate')) {
                $this->eventFireBeforeUpdate($data, ($oldData[0] ?? []));
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

            try {
                $update = $baseQuery->update(
                    $this->checkColumnsForUpdate($this->hitterProcess($data, $dataKey))
                );

                if ($update == '0') {
                    return Exception::updateException('', ['model' => $this->getModelName()]);
                }

                $this->updateEventDispatcher($oldData, $data);
                $this->addPostQueryDispatcher($data,$dataKey);

            } catch (\Exception $exception) {
                return $this->sqlException($exception);
            }

            $result =  ($baseQuery->get()->toArray())[0] ?? [];

            if (count($this->addPostQueryResults)) {
                $queryList[] = array_merge($result, $this->addPostQueryResults[$dataKey]);
            }
            else{
                $queryList[] = $result = ($baseQuery->get()->toArray())[0] ?? [];
            }

            if (method_exists($this, 'eventFireAfterUpdate')) {
                $this->eventFireAfterUpdate($result, $data);
            }
        }

        return $queryList;
    }
}
