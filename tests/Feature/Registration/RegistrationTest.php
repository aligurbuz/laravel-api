<?php

namespace Tests\Feature\Registration;

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
}
