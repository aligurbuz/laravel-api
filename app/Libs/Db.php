<?php

namespace App\Libs;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB as DBFacade;
use Illuminate\Support\Facades\File;

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
     * get table required columns for model
     *
     * @param null $table
     * @return array
     */
    public static function requiredColumns($table = null): array
    {
        $entities = static::entities($table);

        return $entities['required_columns'] ?? [];
    }

    /**
     * get entity for table
     *
     * @param string|null $table
     * @return array
     */
    public static function entities(string $table = null): array
    {
        if (class_exists($table)) {
            $table = static::getTableNameFromModel($table);
        }

        $columnPath = base_path('database/columns/' . $table . '.php');

        if (file_exists($columnPath)) {
            return File::getRequire($columnPath);
        }

        return [];
    }

    /**
     * get table name from model
     *
     * @param $model
     * @return string|null
     */
    public static function getTableNameFromModel($model): ?string
    {
        if (class_exists($model)) {
            return (new $model)->getTable();
        }

        return null;
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

        return array_combine(($entities['columns'] ?? []), ($entities['types'] ?? []));
    }

    /**
     * get table columns for model
     *
     * @param null $table
     * @return array
     */
    public static function comments($table = null): array
    {
        $entities = static::entities($table);

        return array_combine($columns = ($entities['columns'] ?? []), ($entities['comments'] ?? $columns));
    }

    /**
     * get table enum fields for model
     *
     * @param null $table
     * @return array
     */
    public static function enums($table = null): array
    {
        $entities = static::entities($table);

        return array_combine($enums = ($entities['enum_columns'] ?? []), ($entities['enum_values'] ?? $enums));
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

        return array_combine(($entities['max_length_columns'] ?? []), ($entities['max_length_values'] ?? []));
    }

    /**
     * get table boolean values for model
     *
     * @param null $table
     * @return array
     */
    public static function booleanValues($table = null): array
    {
        $entities = static::entities($table);

        return $entities['boolean_values'] ?? [];
    }

    /**
     * get relation for table
     *
     * @return array
     */
    public static function relations(): array
    {
        $relations = base_path('database/columns/relations.json');

        if (file_exists($relations)) {
            if (!isset(static::$paths[$relations])) {
                static::$paths[$relations] = File::get($relations);
            }
            return json_decode(static::$paths[$relations], 1);
        }

        return [];
    }

    /**
     * get relation for table
     *
     * @return array
     */
    public static function relationCodes(): array
    {
        $relations = base_path('database/columns/relationCodes.json');

        if (file_exists($relations)) {
            if (!isset(static::$paths[$relations])) {
                static::$paths[$relations] = File::get($relations);
            }
            return json_decode(static::$paths[$relations], 1);
        }

        return [];
    }

    /**
     * ensure column exists for db query
     *
     * @param $table
     * @param $column
     * @return bool
     */
    public static function ensureColumnExists($table, $column): bool
    {
        $entities = static::columns($table);

        if (in_array($column, $entities)) {
            return true;
        }

        return false;
    }

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
     * get db config
     *
     * @return array
     */
    public static function config(): array
    {
        $databaseConfig = config('database');
        $defaultDriver = $databaseConfig['default'];

        return $databaseConfig['connections'][$defaultDriver];
    }

    /**
     * db transaction callback for database
     *
     * @param callable $callback
     * @return mixed
     */
    public static function transaction(callable $callback): mixed
    {
        return DBFacade::transaction(function () use ($callback) {
            return call_user_func($callback);
        });
    }

    /**
     * @param string $model
     * @return array
     */
    public static function dummy(string $model): array
    {
        $repository = getModelInstance(ucfirst($model))->getRepository();

        return $repository->dummy();
    }

    /**
     * @param string $model
     * @param array $data
     * @return array
     */
    public static function createDummy(string $model, array $data = []): array
    {
        $repository = getModelInstance(ucfirst($model))->getRepository();

        return $repository->create(
            array_merge(
                static::dummy($model),
                $data
            )
        );
    }
}
