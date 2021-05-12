<?php

use Illuminate\Support\Facades\DB;
use JetBrains\PhpStorm\Pure;
use App\Models\Entities\EntityMap;

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

if(!function_exists('dbTransaction')){

    /**
     * get db transaction for your query
     *
     * @param callable $callback
     * @return EntityMap
     */
    function dbTransaction(callable $callback): mixed
    {
        return DB::transaction(function() use($callback){
            return call_user_func($callback);
        });
    }
}
