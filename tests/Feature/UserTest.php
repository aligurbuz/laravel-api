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

        $content = $this->getContentArray($response);
        $resourceData = $this->getResourceData($content);

        $response->assertStatus(200);
        $this->assertIsArray($resourceData);
        $this->assertCount(1, $resourceData);
    }
}
