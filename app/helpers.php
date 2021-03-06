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
use App\Facades\Authenticate\ApiKey;
use Illuminate\Support\Facades\Route;

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

if(!function_exists('authGuard')){

    /**
     * checks if the user is logged
     *
     * @param string $prefix
     * @return string
     */
    function authGuard(string $prefix = 'login'): string
    {
        return $prefix.'_'.who();
    }
}

if(!function_exists('isAuthenticate')){

    /**
     * checks if the user is logged
     *
     * @return bool
     */
    function isAuthenticate(): bool
    {
        return !is_null(request()->user());
    }
}

if(!function_exists('page')){

    /**
     * manipulates to client request with data
     *
     * @return int
     */
    function page(): int
    {
        return AppContainer::get('page');
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

if(!function_exists('proxyClosure')){

    /**
     * get call closure for application
     *
     * @param mixed $closure
     * @param callable $callback
     * @return mixed
     */
    function proxyClosure(mixed $closure,callable $callback) : mixed
    {
        return call_user_func($callback,($closure instanceof Closure) ? call_user_func($closure) : $closure);
    }
}

if(!function_exists('isLocale')){

    /**
     * checks if the environment is local
     *
     * @return bool
     */
    function isLocale() : bool
    {
        return app()->environment()=='local';
    }
}

if(!function_exists('isProduction')){

    /**
     * checks if the environment is production
     *
     * @return bool
     */
    function isProduction() : bool
    {
        return app()->environment()=='production';
    }
}

if(!function_exists('who')){

    /**
     * tells who is apikey
     *
     * @return string
     */
    function who(): string
    {
        return ApiKey::who();
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
        return AppContainer::get(Constants::acceptLanguage,2693479080);
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
        return Str::snake(getModelName(getModelWithPlural($model))).'_code';
    }
}

if(!function_exists('getModelWithPlural')){

    /**
     * @param $model
     * @return string
     */
    function getModelWithPlural($model): string
    {
        if(Str::endsWith($model,'s')){
            $model = substr($model,0,-1);
        }

        if(Str::endsWith($model,'ie')){
            $model = str_replace('ie','y',$model);
        }

        return $model;
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

if(!function_exists('endpoint')){

    /**
     * @return string
     */
    function endpoint(): string
    {
        return str_replace('api/','',Route::getCurrentRoute()->uri());
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

if(!function_exists('isValidIndex')){

    /**
     * Sorts the given data value by index.
     *
     * @param string $table
     * @param string $column
     * @return bool
     */
    function isValidIndex(string $table,string $column): bool
    {
        $indexes = DBFacade::indexes($table);

        return in_array($column,$indexes);
    }
}
