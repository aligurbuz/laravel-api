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
        if(!count($this->requires())){
            $response = $this->post($this->apiRequestPrefix(),[],$this->headers());
            $response->assertStatus(400);
        }
    }
}
