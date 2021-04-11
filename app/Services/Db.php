<?php

namespace App\Services;

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
        if(!isset(static::$columns[$table])){
            static::$columns[$table] = (new self())->getConnection()->getSchemaBuilder()->getColumnListing($table);
        }

        return static::$columns[$table];
    }
}
