<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

class Db extends Model
{
    /**
     * @var array
     */
    protected static array $columns = [];

    /**
     * get table columns for model
     *
     * @param null $table
     * @return array
     */
    public static function columns($table = null): array
    {
        $entities = static::entities($table);

        return $entities['columns'] ?? [];
    }

    /**
     * get entity for table
     *
     * @param null|string $table
     * @return array
     */
    public static function entities($table = null) : array
    {
        if(class_exists($table)){
            $table = static::getTableNameFromModel($table);
        }

        $columnPath = base_path('database/columns/'.$table.'.php');

        if(file_exists($columnPath)){
            return File::getRequire($columnPath);
        }

        return [];
    }

    /**
     * get table name from model
     *
     * @param $model
     * @return null
     */
    public static function getTableNameFromModel($model)
    {
        if(class_exists($model)){
            return (new $model)->getTable();
        }

        return null;
    }
}
