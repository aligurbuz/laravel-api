<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Support\Str;
use App\Exceptions\Exception;
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
     * @param array $data
     */
    public function updateEventDispatcher(array $data = []) : void
    {
        $this->updateLocalization($data);
        $this->deleteCache();
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
            $baseQuery = $this->getBaseQueryForUpdate($data,$id);

            try{
                $update = $baseQuery->update($data);
                $this->updateEventDispatcher($data);
            }
            catch (\Exception $exception){
                return $this->sqlException($exception);
            }

            if($update=='0'){
                return Exception::updateException();
            }

            $queryList[] = ($baseQuery->get()->toArray())[0] ?? [];
        }

        return $queryList;
    }
}
