<?php 

namespace App\Client\Customer\Profiles\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Customer;

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
	protected array $model = [Customer::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['customer_code' => 'required|integer'];
}
