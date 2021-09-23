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
        $this->client = Search::create()->setHosts($this->getConfig($connections))->build();
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

    /**
     * Returns a concise representation of the cluster health.
     *
     * $params['format'] = (string) a short version of the Accept header, e.g. json, yaml
     * $params['h']      = (list) Comma-separated list of column names to display
     * $params['help']   = (boolean) Return help information (Default = false)
     * $params['s']      = (list) Comma-separated list of column names or column aliases to sort by
     * $params['time']   = (enum) The unit in which to display time values (Options = d,h,m,s,ms,micros,nanos)
     * $params['ts']     = (boolean) Set false to disable timestamping (Default = true)
     * $params['v']      = (boolean) Verbose mode. Display column headers (Default = false)
     *
     * @param array $params Associative array of parameters
     * @return array
     * @see https://www.elastic.co/guide/en/elasticsearch/reference/master/cat-health.html
     */
    public function health(array $params = []): array
    {
        return $this->client->cat()->health($params);
    }
}
