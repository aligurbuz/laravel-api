<?php

namespace Tests;

use App\Services\Redis;
use Predis\ClientInterface;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected const unitTestToken = 'unitTestToken';

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
            $this->assertArrayHasKey('token',$content['resource'][0]);
            $this->assertArrayHasKey('user',$content['resource'][0]);
            $redis->set(self::unitTestToken,$content['resource'][0]['token']);
            $redis->expire(self::unitTestToken,3600);
        }
        else{
            $this->assertTrue(true);
        }
    }
}
