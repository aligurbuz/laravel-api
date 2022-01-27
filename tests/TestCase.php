<?php

namespace Tests;

use App\Constants;
use App\Services\AppContainer;
use App\Services\Db;
use App\Services\Redis;
use Illuminate\Support\Facades\File;
use Predis\ClientInterface;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected const unitTestToken = 'unitTestToken';

    /**
     * get api request prefix for feature test class
     *
     * @param string|null $endpoint
     * @return string
     */
    public function apiRequestPrefix(?string $endpoint = null) : string
    {
        $endpoint = $endpoint ?? $this->endpoint;
        return Constants::apiPrefix.'/'.$endpoint;
    }

    /**
     * @return string[]
     */
    public function headers() : array
    {
        return [
            'Apikey' => '36a43836036ead1a475de70bab62ba5c',
            'Content-Type' => 'application/json',
            'Accept-Language' => 'en'
        ];
    }

    /**
     * @return string[]
     */
    public function headersWithAuthorization() : array
    {
        return [
            'Apikey' => '36a43836036ead1a475de70bab62ba5c',
            'Content-Type' => 'application/json',
            'Accept-Language' => 'en',
            'Authorization' => 'Bearer '.$this->getToken()
        ];
    }

    /**
     * @param object $data
     * @return array
     */
    public function getContentArray(object $data) : array
    {
        return json_decode($data->getContent(),true);
    }

    /**
     * @param array $data
     * @return array
     */
    public function getResourceData(array $data = []) : array
    {
        return $data['resource'][0]['data'] ?? $data['resource'];
    }

    /**
     * get client for endpoint
     *
     * @return array
     */
    public function getClient() : array
    {
        $client = json_decode(File::get(database_path('columns').''.DIRECTORY_SEPARATOR.'modelClients.json'),true);
        return $client[ucfirst($this->getModel())] ?? [];
    }

    /**
     * @param string $method
     * @return object
     */
    public function getClientInstance(string $method = 'get') : object
    {
        return AppContainer::use('testClientInstance',function() use($method){
           $client = $this->getClient();
           return new $client[$method];
        });
    }

    /**
     * get client rule for endpoint
     *
     * @param string $method
     * @return array
     */
    public function getClientRules(string $method = 'get') : array
    {
        return $this->getClientInstance($method)->getRule();
    }

    /**
     * get model for endpoint
     *
     * @return string
     */
    public function getModel() : string
    {
        $serviceJson = getServiceJson($this->endpoint);
        return $serviceJson['model'] ?? 'none';
    }

    /**
     * get required columns
     *
     * @return array
     */
    public function getRequiredColumns() : array
    {
        $modelNamespace = Constants::modelNamespace.'\\'.$this->getModel();
        $modelInstance = new $modelNamespace;

        return Db::requiredColumns($modelInstance->getTable());
    }

    /**
     * @return ClientInterface
     */
    public function getRedisConnection() : ClientInterface
    {
        return Redis::client();
    }

    /**
     * @return string
     */
    public function getToken() : string
    {
        $token = $this->getRedisConnection()->get(self::unitTestToken);

        if(is_null($token)){
            $this->test_login();
        }

        return $this->getRedisConnection()->get(self::unitTestToken);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_login()
    {
        $redis = $this->getRedisConnection();

        if(!$redis->exists(self::unitTestToken)){
            $response = $this->postJson('/api/login',[
                'email' => 'test@gmail.com',
                'password' => '123456'
            ],$this->headers());

            $content = json_decode($response->getContent(),true);


            $response->assertStatus(200);
            $this->assertArrayHasKey('token',$content['resource'][0]['data'][0]);
            $this->assertArrayHasKey('user',$content['resource'][0]['data'][0]);
            $redis->set(self::unitTestToken,$content['resource'][0]['data'][0]['token']);
            $redis->expire(self::unitTestToken,3600);
        }
        else{
            $this->assertTrue(true);
        }
    }
}
