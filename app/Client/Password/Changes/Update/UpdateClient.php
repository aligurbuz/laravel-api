<?php

namespace App\Client\Password\Changes\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Password\Changes\ChangesMainSupport;
use App\Models\PasswordChange;

class UpdateClient extends Client
{
	use GeneratorTrait;
	use ChangesMainSupport;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = [
        'password'
    ];

    public array $capsuleDescriptions = [
        'password' => 'Password value to be changed'
    ];

	/**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [PasswordChange::class];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [
        'password_change_code' => 'required|integer',
        'email' => 'string|required',
        'hash' => 'string|required',
        'password' => 'string|required'
    ];
}
