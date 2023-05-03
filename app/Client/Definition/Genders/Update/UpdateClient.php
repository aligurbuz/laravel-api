<?php 

namespace App\Client\Definition\Genders\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Definition\Genders\GendersMainSupport;
use App\Models\Gender;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use GendersMainSupport;
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
	protected array $model = [Gender::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['gender_code' => 'required|integer'];
}
