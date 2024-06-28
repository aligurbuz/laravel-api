<?php 

namespace App\Client\Localizations\Front\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Localizations\Front\FrontMainSupport;
use App\Models\FrontLang;

class CreateClient extends Client
{
	use GeneratorTrait;
	use FrontMainSupport;
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
	protected array $model = [FrontLang::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [];
}
