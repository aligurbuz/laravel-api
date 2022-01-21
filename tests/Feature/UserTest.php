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
        $response = $this->get('api/user?limit=1',$this->headersWithAuthorization());

        $response->assertStatus(200);
    }
}
