<?php

namespace Tests\Feature\Registration;

use App\Repositories\Repository;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    /**
     * @var string
     */
    protected string $endpoint = 'registration';

    /**
     * A basic test user.
     *
     * @return void
     */
    public function test_registration()
    {
        if(count($this->getRequiredColumns())){
            $response = $this->post($this->apiRequestPrefix(),[],$this->headers());
            $response->assertStatus(400);
        }
    }

    /**
     * A basic test user.
     *
     * @return void
     */
    public function test_registration2()
    {
        if(count($requiredColumns = $this->getRequiredColumns())){
            $mockData = $this->getMockData('get');

            foreach ($requiredColumns as $field){
                if(!isset($mockData[$field])){
                    $response = $this->post($this->apiRequestPrefix(),$mockData,$this->headers());
                    $response->assertStatus(400);
                }
            }
        }
    }

    /**
     * A basic test user.
     *
     * @return void
     */
    public function test_registration_post()
    {
        $mockData = $this->getMockData('post');

        if(count($mockData)){
            $response = $this->postJson($this->apiRequestPrefix(),$mockData,$this->headers());
            $response->assertStatus(200);

            $userRepository = Repository::user();
            $user = $userRepository->role()->where('email',$mockData['user']['email'])->getRepository();
            $this->assertEquals($user[0]['email'],$mockData['user']['email']);
            $this->assertEquals(0,$user[0]['status']);
            $this->assertArrayHasKey('role_code',$user[0]['role'][0]);
            $this->assertEquals($user[0]['role_code'],$user[0]['role'][0]['role_code']);
        }
        else{
            $response = $this->post($this->apiRequestPrefix(),$mockData,$this->headers());
            $response->assertStatus(400);
        }
    }
}
