<?php

namespace Tests\Feature\Country;

use Tests\TestCase;

class CountryTest extends TestCase
{
    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_countries()
    {
        $response = $this->get('api/countries',$this->headersWithAuthorization());

        $content = $this->getContentArray($response);
        $resourceData = $this->getResourceData($content);

        $response->assertStatus(200);
        $this->assertIsArray($resourceData);
        $this->assertTrue(true,$resourceData[0]['country_code']);
    }

    /**
     * A basic test countries.
     *
     * @return void
     */
    public function test_countries_withoutAuth()
    {
        $response = $this->get('api/countries',$this->headers());

        $content = $this->getContentArray($response);
        $resourceData = $this->getResourceData($content);

        $response->assertStatus(200);
        $this->assertIsArray($resourceData);
        $this->assertTrue(true,$resourceData[0]['country_code']);
    }
}
