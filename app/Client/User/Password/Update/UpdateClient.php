<?php 

namespace App\Client\User\Password\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\User\Password\PasswordMainSupport;
use App\Models\UserPassword;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use PasswordMainSupport;
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
	protected array $model = [UserPassword::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['user_password_code' => 'required|integer'];
}
