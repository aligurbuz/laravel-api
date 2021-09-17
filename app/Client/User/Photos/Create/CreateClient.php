<?php 

namespace App\Client\User\Photos\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\UserPhoto;

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
	protected array $model = [UserPhoto::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
