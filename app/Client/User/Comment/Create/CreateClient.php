<?php 

namespace App\Client\User\Comment\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;

class CreateClient extends Client
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
