<?php

use App\Constants;
use App\Exceptions\Exception;
use App\Facades\Authenticate\ApiKey;
use App\Factory\Factory;
use App\Models\Entities\EntityMap;
use App\Repositories\EloquentRepository;
use App\Repositories\Repository;
use App\Services\AppContainer;
use App\Services\Client;
use App\Services\Db as DBFacade;
use App\Services\Git;
use App\Services\HashGenerator;
use App\Services\Redis;
use App\Services\Request\Request as HttpRequest;
use App\Services\Service;
use Faker\Generator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\Pure;
use App\Http\Controllers\DoodleController;

if (!function_exists('dod')) {

    /**
     * @return mixed
     */
    function dod() : mixed
    {
        return (new DoodleController())->handle();
    }
}

if (!function_exists('httpMethod')) {

    /**
     * @return string
     */
    function httpMethod() : string
    {
        return strtolower(request()->method());
    }
}

if (!function_exists('faker')) {

    /**
     * @return Generator
     */
    function faker() : Generator
    {
        return \Faker\Factory::create();
    }
}

if (!function_exists('customerCode')) {

    /**
     * get restaurant_code for global gate accessing
     *
     * @param int|null $customerCode
     * @return int
     */
    function customerCode(?int $customerCode = null): int
    {
        if(!is_null($customerCode)){
            AppContainer::setWithTerminating('customerCode',$customerCode);
        }

        return AppContainer::use('customerCode', function () {
            return Factory::app()->customerCode();
        });
    }
}

if (!function_exists('cryptArray')) {

    /**
     * get crypt array data
     *
     * @param array $data
     * @return string
     */
    function cryptArray(array $data = []): string
    {
        return sha1(md5(json_encode($data)));
    }
}

if (!function_exists('getRanges')) {

    /**
     * get cache key
     *
     * @return array
     */
    function getRanges(): array
    {
        $ranges = request()->query->get('range', '');

        return explode(',', $ranges);
    }
}

if (!function_exists('getCache')) {

    /**
     * get cache redis data
     *
     * @param string $model
     * @param string $hash
     * @param callable $callback
     * @return mixed
     */
    function getCache(string $model, string $hash, callable $callback): mixed
    {
        $redisConnection = Redis::client();

        if ($redisConnection->hexists($model, $hash)) {
            return json_decode($redisConnection->hget($model, $hash), true);
        }

        $callback = call_user_func($callback);
        $redisConnection->hset($model, $hash, json_encode($callback));
        $redisConnection->expire($model, 300);

        return $callback;
    }
}

if (!function_exists('timezone')) {

    /**
     * get restaurant timezone for global gate accessing
     *
     * @return ?string
     */
    function timezone(): ?string
    {
        return 'America/New_york';
    }
}

if (!function_exists('defaultTimezoneCode')) {

    /**
     * get default timezone code for global gate accessing
     *
     * @return int
     */
    function defaultTimezoneCode(): int
    {
        return crc32('timezone1');
    }
}

if (!function_exists('entity')) {

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

if (!function_exists('httpRequest')) {

    /**
     * get factory instance
     *
     * @param array $data
     * @return HttpRequest
     */
    function httpRequest(array $data = []): HttpRequest
    {
        return new HttpRequest($data);
    }
}

if (!function_exists('assignQueryParameters')) {

    /**
     * Query parameter assignment is made for the get method.
     *
     * @param array $data
     * @param bool $recursive
     * @return void
     */
    function assignQueryParameters(array $data = [], bool $recursive = true): void
    {
        if (request()->method() == 'GET') {
            $request = request()->query->all();
            if ($recursive) {
                $clientWithAutoKeys = array_replace_recursive($request, $data);
            } else {
                $clientWithAutoKeys = array_replace($request, $data);
            }

            request()->query->replace([]);
            request()->query->add($clientWithAutoKeys);
        }
    }
}


if (!function_exists('getServiceJson')) {

    /**
     * get service json
     *
     * @param string|null $key
     * @return array
     */
    function getServiceJson(?string $key = null): array
    {
        $serviceJsonFile = database_path('columns') . '' . DIRECTORY_SEPARATOR . 'service.json';
        $serviceJson = json_decode(File::get($serviceJsonFile), true);

        $classicEndpoint = ucfirst($key) . '' . DIRECTORY_SEPARATOR . '' . $key;
        $serviceJsonKey = $serviceJson[ucfirst($key)] ?? ($serviceJson[$classicEndpoint] ?? []);

        return !is_null($key) ? $serviceJsonKey : $serviceJson;
    }
}

if (!function_exists('isException')) {

    /**
     * throws exception for invalid code
     *
     * @param callable $callback
     * @return mixed
     */
    function isException(callable $callback): mixed
    {
        try {
            return call_user_func($callback, false);
        } catch (\Exception) {
            return call_user_func($callback, true);
        }
    }
}

if (!function_exists('moneyFormatter')) {

    /**
     * get currency string for application
     * @param $value
     * @param bool $floatReturn
     * @param int $roundType
     * @return string|float
     */
    function moneyFormatter($value, bool $floatReturn = true, int $roundType = PHP_ROUND_HALF_UP): string|float
    {
        $value = (float)$value;

        if ($floatReturn) {
            return round((float)number_format($value, 2, '.', ''), $roundType);
        }

        return round(number_format($value, 2, '.', ','), $roundType);
    }
}

if (!function_exists('publisher')) {

    /**
     * publisher method
     *
     */
    function publisher(array $message = []): void
    {
        \Illuminate\Support\Facades\Redis::publish('test-channel', json_encode($message));
    }
}

if (!function_exists('currency')) {

    /**
     * get currency string for application
     *
     */
    function currency(): string
    {
        return 'USD';
    }
}

if (!function_exists('checkBool')) {

    /**
     * get company code for application
     *
     * @param $value
     * @return bool
     */
    function checkBool($value): bool
    {
        $value = $value == '1' ? true : $value;

        return $value == 1 ? true : $value;
    }
}

if (!function_exists('first')) {

    /**
     * get repository model first data for application
     *
     * @param string $model
     * @param int $code
     * @return array
     */
    function first(string $model, int $code): array
    {
        return Repository::$model()->code($code)->latest();
    }
}

if (!function_exists('isClientRequest')) {

    /**
     * get client request for application
     *
     * @return bool
     */
    function isClientRequest(): bool
    {
        return AppContainer::has(Constants::clientRepositoryRequest);
    }
}

if (!function_exists('isRelation')) {

    /**
     * get client request for application
     *
     * @return bool
     */
    function isRelation(): bool
    {
        return AppContainer::has('isRelation');
    }
}

if (!function_exists('client')) {

    /**
     * get client data
     *
     * @param string|null $key
     * @return array|string|null
     */
    function client(?string $key = null): array|string|null
    {
        $clientData = (Client::data())[0] ?? [];

        if (!is_null($key)) {
            return $clientData[$key] ?? null;
        }

        return $clientData;
    }
}

if (!function_exists('isExistAuthorization')) {

    /**
     * checks if the user is logged
     *
     * @return bool
     */
    function isExistAuthorization(): bool
    {
        return request()->headers->has('authorization');
    }
}

if (!function_exists('consoleAuthorizationStatus')) {

    /**
     * checks if the user is logged
     *
     * @return bool
     */
    function consoleAuthorizationStatus(): bool
    {
        return request()->headers->has('authorization') || !app()->runningInConsole();
    }
}

if (!function_exists('publicPath')) {

    /**
     * get publicPath for application
     *
     * @return string
     */
    function publicPath(): string
    {
        return AppContainer::get('public_path');
    }
}

if (!function_exists('encodeString')) {

    /**
     * the given string value makes hashing
     *
     * @param string $string
     * @return string
     */
    function encodeString(string $string): string
    {
        /*** @var HashGenerator $hashGenerator */
        $hashGenerator = AppContainer::use('hashGenerator', function () {
            return new HashGenerator();
        });

        return $hashGenerator->encode($string);
    }
}

if (!function_exists('decodeString')) {

    /**
     * the given hash string makes decoding
     *
     * @param string $hash
     * @return string
     */
    function decodeString(string $hash): string
    {
        /*** @var HashGenerator $hashGenerator */
        $hashGenerator = AppContainer::use('hashGenerator', function () {
            return new HashGenerator();
        });

        return $hashGenerator->decode($hash);
    }
}

if (!function_exists('makeIfProduction')) {

    /**
     * get publicPath for application
     *
     * @param $data
     * @return mixed
     */
    function makeIfProduction($data): mixed
    {
        return (isProduction() === true) ? $data : null;
    }
}

if (!function_exists('memory')) {

    /**
     * get publicPath for application
     *
     * @param object $eloquentRepository
     * @param bool $afterLoadingRepository
     * @return array
     */
    function memory(object $eloquentRepository, bool $afterLoadingRepository = true): array
    {
        return $eloquentRepository->memory($afterLoadingRepository);
    }
}

if (!function_exists('isRepository')) {

    /**
     * checks if the repository is valid
     *
     */
    function isRepository($repository): bool
    {
        return $repository instanceof EloquentRepository;
    }
}

if (!function_exists('isPost')) {

    /**
     * checks if the request is POST
     *
     */
    function isPost(): bool
    {
        return request()->method() === 'POST';
    }
}

if (!function_exists('isGet')) {

    /**
     * checks if the request is GET
     *
     */
    function isGet(): bool
    {
        return request()->method() === 'GET';
    }
}

if (!function_exists('isPut')) {

    /**
     * checks if the request is PUT
     *
     */
    function isPut(): bool
    {
        return request()->method() === 'PUT';
    }
}

if (!function_exists('apiUrl')) {

    /**
     * get api url for application
     *
     * @return string
     */
    function apiUrl(): string
    {
        return AppContainer::get('apiUrl');
    }
}

if (!function_exists('timezone')) {

    /**
     * get timezone for global gate accessing
     *
     * @return ?string
     */
    function timezone(): ?string
    {
        return 'America/New_York';
    }
}

if (!function_exists('authGuard')) {

    /**
     * checks if the user is logged
     *
     * @param string $prefix
     * @return string
     */
    function authGuard(string $prefix = 'login'): string
    {
        return $prefix . '_' . who();
    }
}

if (!function_exists('getQueryFilter')) {

    /**
     * get query filter values for application
     * @param string|null $key
     * @return mixed
     */
    function getQueryFilter(?string $key = null): mixed
    {
        $queryFilter = request()->query('filter', []);

        if (is_null($key)) {
            return $queryFilter;
        }

        return $queryFilter[$key] ?? null;

    }
}

if (!function_exists('isAuthenticate')) {

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

if (!function_exists('getClientInstance')) {

    /**
     * get client instance
     *
     * @return object
     */
    function getClientInstance(): object
    {
        return AppContainer::get('clientInstance', new class {
        });
    }
}

if (!function_exists('page')) {

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

if (!function_exists('cR')) {

    /**
     * manipulates to client request with data
     *
     * @param string $client
     * @param array $data
     * @param string|null $repositoryName
     * @param bool $container
     * @return array
     */
    function cR(string $client, array $data = [], ?string $repositoryName = null, bool $container = false): array
    {
        $factory = Factory::client(['client' => $client])->cR($data, $container);

        if (!is_null($repositoryName)) {
            $clientNames = explode('.', $client);
            return Repository::$repositoryName()->{$clientNames[2]}();
        }

        return $factory;
    }
}

if (!function_exists('findRepositoryFromCr')) {

    /**
     * find repository name from cr data
     *
     * @param string $cr
     * @return ?string
     */
    function findRepositoryFromCr(string $cr): ?string
    {
        $crMapsContent = File::get(database_path('columns') . '' . DIRECTORY_SEPARATOR . 'crMaps.json');
        $crMapsData = json_decode($crMapsContent, true);

        return $crMapsData[$cr]['model'] ?? null;
    }
}

if (!function_exists('service')) {

    /**
     * service instance
     *
     * @return Service
     */
    function service(): Service
    {
        return AppContainer::use('appService', function () {
            return new Service();
        });
    }
}

if (!function_exists('pushMigration')) {

    /**
     * push migration for application
     *
     * @param $service
     * @param $directory
     * @param $model
     * @return void
     */
    function pushMigration($service, $directory, $model, $routeFile = null): void
    {
        if (isLocale()) {
            $pusherJsonPath = base_path('pusher.json');
            $pusherJson = json_decode(File::get($pusherJsonPath), true);
            $pusherHashing = md5($service . '_' . $directory . '_' . $model);

            if (!in_array($pusherHashing, $pusherJson)) {
                $pusherJson[] = $pusherHashing;
                putJsonToFile($pusherJsonPath, $pusherJson);

                $routeFile = is_null($routeFile) ? $directory : $routeFile;

                \git()->commit('migration for ' . $model . ' has been created');
                \service()->create($service, $directory, $model, $routeFile);
                \git()->commit('service for ' . $service . ' has been created');
            }
        }
    }
}

if (!function_exists('putJsonToFile')) {

    /**
     * put json to file
     *
     * @param string $path
     * @param array $data
     * @return bool|int
     */
    function putJsonToFile(string $path, array $data = []): bool|int
    {
        return File::put($path, Collection::make($data)->toJson(JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
    }
}

if (!function_exists('git')) {

    /**
     * git instance
     *
     * @return Git
     */
    function git(): Git
    {
        return AppContainer::use('git', function () {
            return new Git();
        });
    }
}

if (!function_exists('proxyClosure')) {

    /**
     * get call closure for application
     *
     * @param mixed $closure
     * @param callable $callback
     * @return mixed
     */
    function proxyClosure(mixed $closure, callable $callback): mixed
    {
        return call_user_func($callback, ($closure instanceof Closure) ? call_user_func($closure) : $closure);
    }
}

if (!function_exists('isLocale')) {

    /**
     * checks if the environment is local
     *
     * @return bool
     */
    function isLocale(): bool
    {
        return app()->environment() == 'local';
    }
}

if (!function_exists('isProduction')) {

    /**
     * checks if the environment is production
     *
     * @return bool
     */
    function isProduction(): bool
    {
        return app()->environment() == 'production';
    }
}

if (!function_exists('who')) {

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

if (!function_exists('appLanguageCode')) {

    /**
     * get application language code for application
     *
     * @return int
     */
    function appLanguageCode(): int
    {
        return AppContainer::get(Constants::acceptLanguage, 2693479080);
    }
}

if (!function_exists('fullTextSearchTable')) {

    /**
     * full text search table for migration
     *
     * @param $table
     * @param array $columns
     * @return void
     */
    function fullTextSearchTable($table, array $columns = []): void
    {
        $queryString = 'ALTER TABLE ' . $table . ' ADD FULLTEXT fulltext_index (' . implode(',', $columns) . ')';
        DB::statement($queryString);
    }
}

if (!function_exists('generateHash')) {

    /**
     * generates hash via crc32 method
     *
     * @return int
     */
    function generateHash(): int
    {
        return crc32(Client::fingerPrint() . '_' . time() . '_' . rand(1, 999999));
    }
}

if (!function_exists('inValidCodeException')) {

    /**
     * throws exception for invalid code
     *
     * @param ?string $key
     * @param ?int $value
     * @return object
     */
    function inValidCodeException(?string $key = null, ?int $value = null): object
    {
        return Exception::customException('codeException', [
            'key' => $key,
            'value' => $value
        ]);
    }
}

if (!function_exists('isThrowableInstance')) {

    /**
     * @param $error
     * @return bool
     */
    function isThrowableInstance($error): bool
    {
        return ($error instanceof Throwable);
    }
}

if (!function_exists('booleanChecks')) {

    /**
     * @param mixed $data
     * @return bool
     */
    function booleanChecks(mixed $data): bool
    {
        $data = ($data == '1') ? true : $data;
        $data = ($data == '0') ? false : $data;
        $data = ($data == 1) ? true : $data;

        return ($data == 0) ? false : $data;
    }
}

if (!function_exists('getTableCode')) {

    /**
     * @param $model
     * @return string
     */
    function getTableCode($model): string
    {
        return Str::snake(getModelName(getModelWithPlural($model))) . '_code';
    }
}

if (!function_exists('getTableName')) {

    /**
     * @param $model
     * @return string
     */
    function getTableName($model): string
    {
        $model = Constants::modelNamespace . '\\' . $model;

        return (new $model)->getTable();
    }
}

if (!function_exists('getModelFromTableCode')) {

    /**
     * @param $code
     * @return string
     */
    function getModelFromTableCode($code): string
    {
        $code = str_replace('_code', '', $code);

        return ucfirst(Str::camel($code));
    }
}

if (!function_exists('getModelWithPlural')) {

    /**
     * @param $model
     * @return string
     */
    function getModelWithPlural($model): string
    {
        if (Str::endsWith($model, 's')) {
            $model = substr($model, 0, -1);
        }

        if (Str::endsWith($model, 'ie')) {
            $model = str_replace('ie', 'y', $model);
        }

        return $model;
    }
}

if (!function_exists('getModelName')) {

    /**
     * @param $model
     * @return string
     */
    function getModelName($model): string
    {
        return Str::camel(class_basename($model));
    }
}

if (!function_exists('endpoint')) {

    /**
     * @param bool $camelCase
     * @return string
     */
    function endpoint(bool $camelCase = false): string
    {
        $endpoint = AppContainer::use('endpoint', function () {
            return str_replace('api/', '', Route::getCurrentRoute()->uri());
        });

        if($camelCase){
            return Str::camel(str_replace('/','_',$endpoint));
        }

        return $endpoint;
    }
}

if (!function_exists('objectValue')) {

    /**
     * get object value the given data
     *
     * @param $data
     * @return object
     */
    #[Pure] function objectValue($data): object
    {
        if (is_array($data)) {
            return (object)$data;
        }

        if (is_object($data)) {
            return $data;
        }

        return (object)[$data];
    }
}

if (!function_exists('indexOrdering')) {

    /**
     * Sorts the given data value by index.
     *
     * @param $table
     * @param array $data
     * @return array
     */
    function indexOrdering($table, array $data = []): array
    {
        $list = [];
        $indexes = DBFacade::indexes($table);

        foreach ($indexes as $index) {
            if (isset($data[$index])) {
                $list[$index] = $data[$index];
            }
        }

        return array_merge($list, $data);
    }
}

if (!function_exists('isValidIndex')) {

    /**
     * Sorts the given data value by index.
     *
     * @param string $table
     * @param string $column
     * @return bool
     */
    function isValidIndex(string $table, string $column): bool
    {
        $indexes = DBFacade::indexes($table);

        return in_array($column, $indexes);
    }
}
