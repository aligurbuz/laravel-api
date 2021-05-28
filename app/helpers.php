<?php

use JetBrains\PhpStorm\Pure;
use App\Models\Entities\EntityMap;
use Illuminate\Support\Facades\DB;

if(!function_exists('entity')){

    /**
     * get factory instance
     *
     * @return EntityMap
     */
    #[Pure] function entity(): EntityMap
    {
        return new EntityMap();
    }
}

if(!function_exists('fullTextSearchTable')){

    /**
     * full text search table for migration
     *
     * @param $table
     * @param array $columns
     * @return void
     */
    function fullTextSearchTable($table,array $columns = []): void
    {
        $queryString = 'ALTER TABLE '.$table.' ADD FULLTEXT fulltext_index ('.implode(',',$columns).')';
        DB::statement($queryString);
    }
}
