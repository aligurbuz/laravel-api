<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic test user.
     *
     * @return void
     */
    public function test_user()
    {
        $response = $this->get('api/user',$this->headersWithAuthorization());

        dd($this->getContentArray($response));
        $response->assertStatus(200);
    }
}
