<?php 

namespace App\Client\Gate\Roles\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Role;

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
	protected array $model = [Role::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
