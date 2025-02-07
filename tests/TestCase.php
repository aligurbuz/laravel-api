<?php

namespace Tests;

use App\Constants;
use App\Facades\Database\Authenticate\ApiKey;
use App\Facades\Support\Env\Env;
use App\Libs\AppContainer;
use App\Libs\Db;
use App\Libs\Redis;
use App\Repositories\Repository;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Testing\TestResponse;
use Predis\ClientInterface;

/**
 * @property $repository
 */
abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, TestHttpSupport;

    /**
     * @var string
     */
    protected static string $unitTestToken = 'unitTestToken';

    /**
     * @param string|null $name
     * @param array $data
     * @param string $dataName
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        static::$unitTestToken = static::$unitTestToken . '_' . md5(__DIR__);
    }

    /**
     * get is available required in rules for endpoint
     *
     * @param string $method
     * @return bool
     */
    public function isAvailableRequiredInRules(string $method = 'get'): bool
    {
        $rules = $this->getClientRules($method);

        foreach ($rules as $key => $value) {
            if ($this->isRequired($key, $rules)) {
                return true;
            }
        }

        return false;
    }

    /**
     * get client rule for endpoint
     *
     * @param string $method
     * @return array
     */
    public function getClientRules(string $method = 'get'): array
    {
        return $this->getClientInstance($method)->getRule();
    }

    /**
     * @param string $method
     * @return object
     */
    public function getClientInstance(string $method = 'get'): object
    {
        $client = $this->getClient();
        return new $client[$method];
    }

    /**
     * get client for endpoint
     *
     * @return array
     */
    public function getClient(): array
    {
        $client = json_decode(File::get(database_path('columns') . '' . DIRECTORY_SEPARATOR . 'modelClients.json'), true);
        return $client[ucfirst($this->getModel())] ?? [];
    }

    /**
     * get model for endpoint
     *
     * @return string
     */
    public function getModel(): string
    {
        $serviceJson = getServiceJson($this->endpoint);
        return $serviceJson['model'] ?? 'none';
    }

    /**
     * get client required rules for endpoint
     *
     * @param string|null $key
     * @param array $rules
     * @return bool
     */
    public function isRequired(?string $key = null, array $rules = []): bool
    {
        $clientRules = count($rules) ? $rules : $this->getClientRules();

        if (in_array($key, $this->getRequiredColumns(), true)) {
            return true;
        }

        if (
            isset($clientRules[$key])
            && is_array($clientRules[$key])
            && in_array('required', $clientRules[$key], true)
        ) {
            return true;
        }

        if (
            isset($clientRules[$key])
            && is_string($clientRules[$key])
            && Str::contains('required', $clientRules[$key])
        ) {
            return true;
        }

        return false;
    }

    /**
     * get required columns
     *
     * @return array
     */
    public function getRequiredColumns(): array
    {
        $modelNamespace = Constants::modelNamespace . '\\' . $this->getModel();
        $modelInstance = new $modelNamespace;

        return Db::requiredColumns($modelInstance->getTable());
    }

    /**
     * get status 200
     *
     * @param object $response
     */
    public function status200(object $response)
    {
        $content = $this->getContentArray($response);
        $resourceData = $this->getResourceData($content);

        AppContainer::setWithTerminating('testEndpointRelations', $this->getRelations($content));

        $response->assertStatus(200);
        $this->assertIsArray($resourceData);
    }

    /**
     * @param object $data
     * @return array
     */
    public function getContentArray(object $data): array
    {
        return json_decode($data->getContent(), true);
    }

    /**
     * @param array $data
     * @return array
     */
    public function getResourceData(array $data = []): array
    {
        return $data['resource'][0]['data'] ?? $data['resource'];
    }

    /**
     * get relations
     *
     * @param array $content
     * @return array
     */
    public function getRelations(array $content = []): array
    {
        return $content['instructions']['relations'] ?? [];
    }

    /**
     * get test endpoint relations
     *
     * @return array
     */
    public function getTestEndpointRelations(): array
    {
        $relations = AppContainer::get('testEndpointRelations', []);

        $repository = $this->repository;
        $deniedEagerLoadings = Repository::$repository()->getDeniedEagerLoadings();

        $list = [];

        foreach ($relations as $item) {
            foreach ($deniedEagerLoadings as $deniedEagerLoading) {
                if (
                    Str::contains($item['using'], 'with[' . $deniedEagerLoading . ']')
                    || Str::contains($item['using'], '[with][' . $deniedEagerLoading . ']')
                ) {
                    $denied = true;
                    break;
                }
            }

            if (isset($denied)) continue;

            $using = $item['using'] ?? '';
            $usingExplode = explode('=', $using);

            if (isset($usingExplode[1])) {
                $list[$usingExplode[0]] = $usingExplode[1];
            }

        }

        return $list;
    }

    /**
     * get request for endpoint
     *
     * @param array $params
     * @return TestResponse
     */
    public function getRequest(array $params = []): TestResponse
    {
        $params = count($params) ? '?' . http_build_query($params) : '';

        return $this->get($this->apiRequestPrefix() . '' . $params, $this->headersWithAuthorization());
    }

    /**
     * get api request prefix for feature test class
     *
     * @param string|null $endpoint
     * @return string
     */
    public function apiRequestPrefix(?string $endpoint = null): string
    {
        $endpoint = $endpoint ?? $this->endpoint;
        return Constants::apiPrefix . '/' . $endpoint;
    }

    /**
     * @return string[]
     */
    public function headersWithAuthorization(): array
    {
        return [
            'Apikey' => $this->getApiKey(),
            'Content-Type' => 'application/json',
            'Accept-Language' => 'en',
            'Authorization' => 'Bearer ' . $this->getToken()
        ];
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        $token = $this->getRedisConnection()->get(static::$unitTestToken);

        if (is_null($token)) {
            $this->test_login();
        }

        return $this->getRedisConnection()->get(static::$unitTestToken);
    }

    /**
     * @return ClientInterface
     */
    public function getRedisConnection(): ClientInterface
    {
        return AppContainer::use('redisConnection', function () {
            return Redis::client();
        });
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_login()
    {
        $redis = $this->getRedisConnection();

        if (!$redis->exists(static::$unitTestToken)) {
            $response = $this->postJson('/api/login', [
                'email' => Env::get('ADMIN_USER_EMAIL'),
                'password' => Env::get('ADMIN_USER_PASSWORD')
            ], $this->headers());

            $content = json_decode($response->getContent(), true);

            $response->assertStatus(200);
            $this->assertArrayHasKey('token', $content['resource'][0]['data'][0]['auth']);
            $this->assertArrayHasKey('user', $content['resource'][0]['data'][0]);
            $redis->set(static::$unitTestToken, $content['resource'][0]['data'][0]['auth']['token']);
            $redis->expire(static::$unitTestToken, 3600);
        } else {
            $this->assertTrue(true);
        }
    }

    /**
     * @return string[]
     */
    public function headers(): array
    {
        return [
            'Apikey' => $this->getApiKey(),
            'Content-Type' => 'application/json',
            'Accept-Language' => 'en'
        ];
    }

    /**
     * get api key for test
     *
     * @return string
     */
    public function getApiKey(): string
    {
        $key = ApiKey::get('admin');
        $apiKey = $key->value;

        if ($apiKey === '') {
            throw new \RuntimeException('admin api key is not valid');
        }

        return $apiKey;
    }

    /**
     * get model for endpoint
     *
     * @param object $response
     * @return void
     */
    public function setResponseModelCode(object $response): void
    {
        $content = $this->getContentArray($response);
        $resource = $this->getResourceData($content);
        $modelCode = $resource['0'][$this->getRepository()->getModelCode()];
        AppContainer::setWithTerminating('testModelCode', $modelCode);
    }

    /**
     * get model for endpoint
     *
     * @return object
     */
    public function getRepository(): object
    {
        $serviceJson = getServiceJson($this->endpoint);
        $model = lcfirst(($serviceJson['model'] ?? 'none'));

        return Repository::$model();
    }
}
