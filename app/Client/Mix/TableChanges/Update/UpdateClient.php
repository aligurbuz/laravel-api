<?php 

namespace App\Client\Mix\TableChanges\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\TableChange;

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
	protected array $model = [TableChange::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = ['table_change_code' => 'required|integer'];
}
