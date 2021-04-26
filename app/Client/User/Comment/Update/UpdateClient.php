<?php

namespace App\Client\User\Comment\Update;

use App\Client\Client;
use App\Models\User_comment;
use App\Client\ClientAutoGeneratorTrait;

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
	protected array $model = [User_comment::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [
	    'id' => 'required'
    ];
}
