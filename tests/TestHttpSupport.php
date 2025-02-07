<?php

namespace Tests;

use App\Constants;
use App\Libs\AppContainer;

trait TestHttpSupport
{
    /**
     * get http method results for test case
     *
     * @return void
     */
    protected function getHttpMethod(): void
    {
        AppContainer::terminate(Constants::responseFormatterSupplement);

        $testMock = config('testmock.' . $this->endpoint . '.get', []);

        if (!$this->isAvailableRequiredInRules()) {
            $this->status200($this->getRequest());
        } else {
            if (count($testMock)) {
                $this->status200($this->getRequest($testMock));
            } else {
                $this->getRequest()->assertStatus(400);
            }
        }

        $this->getSingleHttpMethod();
    }

    protected function getSingleHttpMethod(): void
    {
        $request = $this->getRequest();
        $content = $this->getContentArray($request);
        $resource = $this->getResourceData($content);

        if (isset($resource[0])) {
            $tableCode = getTableCode($this->getModel());
            $filter = $this->getRequest([
                'filter' => [$tableCode => $resource[0][$tableCode]]
            ]);

            $filterContent = $this->getContentArray($filter);
            $filterResource = $this->getResourceData($filterContent);

            $this->assertEquals('1', count($filterResource));
            $this->assertEquals($resource[0][$tableCode], $filterResource[0][$tableCode]);
        }
    }

    /**
     * get http method results for test case
     *
     * @return void
     */
    protected function getHttpMethodWithRelations(): void
    {
        $testMock = array_merge(
            $this->getMockData('get'),
            $this->getTestEndpointRelations()
        );

        if (!$this->isAvailableRequiredInRules()) {
            $this->status200($this->getRequest($testMock));
        } else {
            if (count($testMock)) {
                $this->status200($this->getRequest($testMock));
            } else {
                $this->getRequest()->assertStatus(400);
            }
        }
    }

    /**
     * get mock data for test case
     *
     * @param string $method
     * @return array
     */
    protected function getMockData(string $method): array
    {
        return config('testmock.' . $this->endpoint . '.' . $method, []);
    }

    /**
     * post required columns for test case
     *
     * @return void
     */
    protected function postRequiredColumns(): void
    {
        if (count($this->getRequiredColumns())) {
            $response = $this->postJson($this->apiRequestPrefix(), [], $this->headersWithAuthorization());
            $response->assertStatus(400);
        } else {
            $this->assertTrue(true, true);
        }
    }

    /**
     * post http method for test case
     *
     * @return void
     */
    protected function postHttpMethod(): void
    {
        $testMock = $this->getMockData('post');

        $response = $this->postJson(
            $this->apiRequestPrefix(),
            $testMock,
            $this->headersWithAuthorization()
        );

        if (is_array($testMock) && count($testMock)) {
            $this->setResponseModelCode($response);
            $response->assertStatus(200);
        } else {
            $response->assertStatus(400);
        }
    }

    /**
     * Controls the behavior of the status and is_deleted columns via put.
     *
     * @param array $mockData
     * @param int $boolCount
     * @return void
     */
    protected function putHttpMethodActivation(array $mockData = [], int $boolCount = 0): void
    {
        $testMock = $this->getMockData('put');

        if (count($testMock)) {
            $this->putHttpMethod($mockData);

            $response = $this->getRequest([
                'filter' => [
                    $this->getRepository()->getModelCode() => AppContainer::get('testModelCode')
                ],
                'range' => 'active'
            ]);

            $resource = $this->getResourceData($this->getContentArray($response));
            $this->assertCount($boolCount, $resource);
        } else {
            $this->assertTrue(true);
        }

    }

    /**
     * put http method for test case
     *
     * @param array $mockData
     * @return void
     */
    protected function putHttpMethod(array $mockData = []): void
    {
        $testMock = $this->getMockData('put');

        if (count($testMock)) {
            $testMock = array_merge($testMock, $mockData);
        }

        $modelCode = [
            $this->getRepository()->getModelCode() => AppContainer::get('testModelCode')
        ];

        $response = $this->putJson(
            $this->apiRequestPrefix(),
            array_merge($testMock, $modelCode),
            $this->headersWithAuthorization()
        );

        if (is_array($testMock) && count($testMock)) {
            $response->assertStatus(200);
        } else {
            $responseData = $this->getContentArray($response);

            if ($responseData['status']) {
                $response->assertStatus(200);
            } else {
                $response->assertStatus(400);
            }
        }
    }

    /**
     * Controls the behavior of the status and is_deleted columns via put.
     *
     * @return void
     */
    protected function putHttpMethodActivation2(): void
    {
        $this->putHttpMethod(['status' => true, 'is_deleted' => false]);

        $response = $this->getRequest([
            'filter' => [
                $this->getRepository()->getModelCode() => AppContainer::get('testModelCode')
            ],
            'range' => 'active'
        ]);

        $resource = $this->getResourceData($this->getContentArray($response));
        $this->assertCount(1, $resource);
    }
}
