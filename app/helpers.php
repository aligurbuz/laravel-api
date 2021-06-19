<?php

use App\Constants;
use App\Factory\Factory;
use App\Services\Client;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\Pure;
use App\Exceptions\Exception;
use App\Services\AppContainer;
use App\Services\Db as DBFacade;
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

if(!function_exists('cR')){

    /**
     * manipulates to client request with data
     *
     * @param string $client
     * @param array $data
     * @return array
     */
    function cR(string $client,array $data = []): array
    {
        return Factory::client(['client' => $client])->cR($data);
    }
}

if(!function_exists('appLanguageCode')){

    /**
     * get application language code for application
     *
     * @return int
     */
    function appLanguageCode(): int
    {
        return AppContainer::get(Constants::acceptLanguage,0);
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

if(!function_exists('generateHash')){

    /**
     * generates hash via crc32 method
     *
     * @return int
     */
    function generateHash(): int
    {
        return crc32(Client::fingerPrint().'_'.time().'_'.rand(1,999999));
    }
}

if(!function_exists('inValidCodeException')){

    /**
     * throws exception for invalid code
     *
     * @param ?string $key
     * @param ?int $value
     * @return object
     */
    function inValidCodeException(?string $key = null,?int $value = null): object
    {
        return Exception::customException(trans('exception.codeException',[
            'key' => $key,
            'value' => $value
        ]));
    }
}

if(!function_exists('isThrowableInstance')){

    /**
     * @param $error
     * @return bool
     */
    function isThrowableInstance($error): bool
    {
        return ($error instanceof Throwable);
    }
}

if(!function_exists('getTableCode')){

    /**
     * @param $model
     * @return string
     */
    function getTableCode($model): string
    {
        return getModelName($model).'_code';
    }
}

if(!function_exists('getModelName')){

    /**
     * @param $model
     * @return string
     */
    function getModelName($model): string
    {
        return Str::camel(class_basename($model));
    }
}

if(!function_exists('objectValue')){

    /**
     * get object value the given data
     *
     * @param $data
     * @return object
     */
    #[Pure] function objectValue($data): object
    {
        if(is_array($data)){
            return (object)$data;
        }

        if(is_object($data)){
            return $data;
        }

        return (object)[$data];
    }
}

if(!function_exists('indexOrdering')){

    /**
     * Sorts the given data value by index.
     *
     * @param $table
     * @param array $data
     * @return array
     */
    function indexOrdering($table,array $data = []): array
    {
        $list = [];
        $indexes = DBFacade::indexes($table);

        foreach ($indexes as $index){
            if(isset($data[$index])){
                $list[$index] = $data[$index];
            }
        }

        return array_merge($list,$data);
    }
}
