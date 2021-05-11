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
     * @var array
     */
    protected static array $paths = [];

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
     * get table columns for model
     *
     * @param null $table
     * @return array
     */
    public static function indexes($table = null): array
    {
        $entities = static::entities($table);

        return $entities['indexes'] ?? [];
    }

    /**
     * get table columns for model
     *
     * @param null $table
     * @return array
     */
    public static function types($table = null): array
    {
        $entities = static::entities($table);

        return array_combine(($entities['columns'] ?? []),($entities['types'] ?? []));
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
            if(!isset(static::$paths[$columnPath])){
                static::$paths[$columnPath] = File::getRequire($columnPath);
            }
            return static::$paths[$columnPath];
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
