<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_login()
    {
        $response = $this->postJson('/api/login',[
            'email' => 'test@gmail.com',
            'password' => '123456'
        ],['Apikey' => '36a43836036ead1a475de70bab62ba5c','Accept-Language' => 'en'] );

        $content = json_decode($response->getContent(),true);

        $response->assertStatus(200);
        $this->assertArrayHasKey('token',$content['resource'][0]);
        $this->assertArrayHasKey('user',$content['resource'][0]);
    }
}
