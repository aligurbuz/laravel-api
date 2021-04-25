<?php

namespace App\Client\Auth\Login\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\User;

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
	protected array $model = [User::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [
	    'email'     => 'required',
        'password'  => 'required'
    ];
}