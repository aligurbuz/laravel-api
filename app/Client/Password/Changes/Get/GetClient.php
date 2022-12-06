<?php 

namespace App\Client\Password\Changes\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Password\Changes\ChangesMainSupport;
use App\Models\PasswordChange;

class GetClient extends Client
{
	use GeneratorTrait;
	use ChangesMainSupport;
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
	protected array $model = [PasswordChange::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
