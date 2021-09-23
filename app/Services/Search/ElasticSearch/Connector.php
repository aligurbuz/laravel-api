<?php

declare(strict_types=1);

namespace App\Services\Search\ElasticSearch;

use Elasticsearch\Client;
use Elasticsearch\ClientBuilder as Search;

class Connector
{
    /**
     * @var Client
     */
    protected Client $client;

    /**
     * @param array $connections
     */
    public function __construct(array $connections = [])
    {
        $this->client = Search::create()->setHosts($connections)->build();
    }

    /**
     * get configuration values for elasticSearch connection
     *
     * @param array $data
     * @return array
     */
    public function getConfig(array $data = []) : array
    {
        if(count($data)){
            return $data;
        }

        $configurationValues = config('search');
        $defaultAdapter = $configurationValues['default'] ?? 'none';

        return $configurationValues['connections'][$defaultAdapter] ?? [];
    }
}
