<?php

namespace App\Repositories;

use App\Exceptions\Exception;
use Illuminate\Contracts\Pagination\Paginator;

class EloquentRepository
{
    /**
     * get data for user model
     *
     * @return Paginator
     */
    public function get() : Paginator
    {
        return static::$model::instruction()->withQuery()
            ->selectQuery()->orderByQuery()->filterQuery()->simplePaginate(20);
    }

    /**
     * create data for user model
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data = []): mixed
    {
        $data = count($data) ? $data : request()->request->all();

        try {
            return static::$model::create($data);
        }
        catch (\Exception $exception){
            return Exception::customException($exception->getPrevious()->getMessage());
        }
    }

    /**
     * update data for user model
     *
     * @param array $data
     * @return mixed
     */
    public function update(array $data = []): mixed
    {
        $data = count($data) ? $data : request()->request->all();

        $baseQuery = static::$model::where('id',intval(($data['id'] ?? 0)));
        $update = $baseQuery->update($data);

        if($update=='0'){
            return Exception::updateException();
        }

        return $baseQuery->get();
    }

    /**
     * @param $id
     * @return array
     */
    public function find(int $id) : array
    {
        return static::$model::find($id)->toArray();
    }
}
