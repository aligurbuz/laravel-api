<?php

declare(strict_types=1);

namespace App\Factory\Search\Interfaces;

use App\Factory\Search\ElasticSearch;

interface SearchInterface
{
    /**
     * @param array $params
     * @return array
     * @see ElasticSearch::health()
     */
    public function health(array $params = []): array;
}
