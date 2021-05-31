<?php 

namespace App\Client\Countries\Countries\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Country;

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
	protected array $model = [Country::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['country_code' => 'required|integer'];
}
