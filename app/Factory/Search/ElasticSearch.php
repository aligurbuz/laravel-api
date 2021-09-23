<?php

declare(strict_types=1);

namespace App\Factory\Search;

use App\Factory\Search\Interfaces\SearchInterface;

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
	 * ElasticSearch constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}
}
