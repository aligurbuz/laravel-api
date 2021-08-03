<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Support\Str;
use App\Exceptions\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

/**
 * Trait UpdateRepository
 * @package App\Repositories
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
     * @return array
     */
    public function hitterProcess(array $data = []): array
    {
        if(
            property_exists($this,'hitter')
            && is_array($this->hitter)
            && count($this->hitter)
        ) {
            foreach ($this->hitter as $hit){
                if(isset($data[$hit])){
                    $data[$hit] = DB::raw(''.$hit.'+'.$data[$hit]);
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
     * @return array|object
     */
    public function updateHandler(array $data = [],bool $id = true): array|object
    {
        $queryList = [];

        foreach ($this->getClientData($data) as $data){
            $baseQuery  =  $this->getBaseQueryForUpdate($data,$id);
            $oldData    =  $baseQuery->get()->toArray();

            try{
                $update = $baseQuery->update($this->hitterProcess($data));
                $this->updateEventDispatcher($oldData,$data);
            }
            catch (\Exception $exception){
                return $this->sqlException($exception);
            }

            if($update=='0'){
                return Exception::updateException();
            }

            $queryList[] = $result = ($baseQuery->get()->toArray())[0] ?? [];

            if(method_exists($this,'eventFireAfterUpdate')){
                $this->eventFireAfterUpdate($result);
            }
        }

        return $queryList;
    }
}
