<?php

namespace Tests\Feature\User;

use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * @var string
     */
    protected string $endpoint = 'user';

    /**
     * A basic test user.
     *
     * @return void
     */
    public function test_user()
    {
        $response = $this->get(''.$this->apiRequestPrefix().'?with[role]=*',$this->headersWithAuthorization());

        $content = $this->getContentArray($response);
        $resourceData = $this->getResourceData($content);

        $this->assertTrue(isset($resourceData[0]['role']));
        $this->assertTrue(isset($resourceData[0]['role'][0]['role_name']));
    }
}
