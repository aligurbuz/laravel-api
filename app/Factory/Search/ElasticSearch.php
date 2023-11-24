<?php

declare(strict_types=1);

namespace App\Factory\Search;

use App\Factory\Search\Interfaces\SearchInterface;
use App\Libs\AppContainer;
use App\Libs\Search\ElasticSearch\Connector;

/**
 * Class ElasticSearch
 * @package App\Factory\Search
 */
class ElasticSearch extends SearchManager implements SearchInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * @var Connector
     */
    protected Connector $search;

    /**
     * ElasticSearch constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
        $this->search = AppContainer::use('ElasticSearch', function () {
            return new Connector();
        });
    }

    /**
     * Returns a concise representation of the cluster health.
     *
     * @param array $params
     * @return array
     */
    public function health(array $params = []): array
    {
        return $this->search->health($params);
    }
}
