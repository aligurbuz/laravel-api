<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Services\AppContainer;
use Illuminate\Support\Str;
use App\Exceptions\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

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
    public function getBaseQueryForUpdate(array $data = [],bool $id = true) : object
    {
        return $this->instance()->where(function(Builder $builder) use($data,$id){
            $modelCode = Str::snake($this->getModelName()).'_code';
            if(isset($data[$modelCode]) && $id === true){
                $builder->where($modelCode,intval(($data[$modelCode] ?? 0)));
            }
        });
    }

    /**
     * get update event dispatcher for repository
     *
     * @param array $oldData
     * @param array $newData
     */
    public function updateEventDispatcher(array $oldData = [],array $newData = []) : void
    {
        $this->createTableChanges(($oldData[0] ?? []),$newData);
        $this->updateLocalization($newData);
        $this->deleteCache();
    }

    /**
     * create table changes for model
     *
     * @param array $oldData
     * @param array $newData
     */
    public function createTableChanges(array $oldData = [],array $newData = []) : void
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
    public function hitterProcess(array $data = [],int $key = 0): array
    {
        if(
            property_exists($this,'hitter')
            && is_array($this->hitter)
            && count($this->hitter)
        ) {
            foreach ($this->hitter as $hit){
                if(isset($data[$hit])){
                    $operator = AppContainer::has('repositoryHitter.'.$key.'.'.$hit)
                        ? AppContainer::get('repositoryHitter.'.$key.'.'.$hit)
                        : '+';
                    $data[$hit] = DB::raw(''.$hit.''.$operator.''.$data[$hit]);
                }
            }
        }

        return $data;
    }

    /**
     * update data for user model
     *
     * @param array $data
     * @param bool $id
     * @param array $create
     * @return array|object
     */
    public function updateHandler(array $data = [],bool $id = true,array $create = []): array|object
    {
        $queryList = [];

        $updateClientData = $this->getClientData($data);

        foreach ($updateClientData as $dataKey => $data){
            if(method_exists($this,'eventFireBeforeUpdate')){
                $this->eventFireBeforeUpdate($data);
            }

            $baseQuery  =  $this->getBaseQueryForUpdate($data,$id);
            $oldData    =  $baseQuery->get()->toArray();

            if(
                !isset($oldData[0])
                && $id === false
                && count($create)
            ){
                return $this->create($create);
            }

            if(!$id && count($create) && isset($data[getTableCode($this->getModel())])){
                unset($data[getTableCode($this->getModel())]);
            }

            try{
                $update = $baseQuery->update($this->hitterProcess($data,$dataKey));

                if($update=='0'){
                    return Exception::updateException('',['model' => $this->getModelName()]);
                }

                $this->updateEventDispatcher($oldData,$data);
            }
            catch (\Exception $exception){
                return $this->sqlException($exception);
            }

            $queryList[] = $result = ($baseQuery->get()->toArray())[0] ?? [];

            if(method_exists($this,'eventFireAfterUpdate')){
                $this->eventFireAfterUpdate($result,$updateClientData);
            }
        }

        return $queryList;
    }
}
