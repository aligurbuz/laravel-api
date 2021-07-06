<?php

namespace App\Services;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Db
 * @package App\Services
 */
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
     * get table columns max length for model
     *
     * @param null $table
     * @return array
     */
    public static function columnMaxLength($table = null): array
    {
        $entities = static::entities($table);

        return array_combine(($entities['max_length_columns'] ?? []),($entities['max_length_values'] ?? []));
    }

    /**
     * get entity for table
     *
     * @param string|null $table
     * @return array
     */
    public static function entities(string $table = null) : array
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
     * get relation for table
     *
     * @return array
     */
    public static function relations() : array
    {
        $relations = base_path('database/columns/relations.json');

        if(file_exists($relations)){
            if(!isset(static::$paths[$relations])){
                static::$paths[$relations] = File::get($relations);
            }
            return json_decode(static::$paths[$relations],1);
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

    /**
     * ensure column exists for db query
     *
     * @param $table
     * @param $column
     * @return bool
     */
    public static function ensureColumnExists($table,$column) : bool
    {
        $entities = static::columns($table);

        if(in_array($column,$entities)){
            return true;
        }

        return false;
    }
}
