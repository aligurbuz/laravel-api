<?php 

namespace App\Client\Logger\Logger\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;

class GetClient extends Client
{
	use GeneratorTrait;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = [];

	/**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
