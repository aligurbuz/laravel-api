<?php 

namespace App\Client\User\Activations\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\UserActivation;

class UpdateClient extends Client
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
	protected array $model = [UserActivation::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['user_activation_code' => 'required|integer'];
}
