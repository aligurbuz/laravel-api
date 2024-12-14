<?php 

namespace App\Client\Support\Crypt\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Support\Crypt\CryptMainSupport;
use App\Models\Crypt;

class CreateClient extends Client
{
	use GeneratorTrait;
	use CryptMainSupport;
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
	protected array $model = [Crypt::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
