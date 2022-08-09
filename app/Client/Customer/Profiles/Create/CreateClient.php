<?php

namespace App\Client\Customer\Profiles\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Customer;

class CreateClient extends Client
{
	use GeneratorTrait;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = ['customer_genders','customer_ages'];

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
	protected array $rule = [
        'customer_genders' => 'array',
        'customer_ages' => 'array',
    ];
}
