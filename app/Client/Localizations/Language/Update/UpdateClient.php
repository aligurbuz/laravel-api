<?php 

namespace App\Client\Localizations\Language\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Language;

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
	protected array $model = [Language::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['language_code' => 'required|integer'];
}
