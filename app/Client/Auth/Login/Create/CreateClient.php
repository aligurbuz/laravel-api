<?php

namespace App\Client\Auth\Login\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;

class CreateClient extends Client
{
	use GeneratorTrait;
	use ClientAutoGeneratorTrait;

	/**
	 * get capsule for client
	 *
	 * @var array
	 */
	protected array $capsule = ['email','password'];

	/**
	 * get model entity validation
	 *
	 * @var array|string[]
	 */
	protected array $model = [];

	/**
	 * get rule for client
	 *
	 * @var array
	 */
	protected array $rule = [
	    'email'     => 'required',
        'password'  => 'required'
    ];

    /**
     * it is password in the client data
     *
     * @var string
     */
    protected string $password;

    /**
     * password value for client
     *
     * @return string
     */
    protected function password(): string
    {
        return $this->password;
    }
}
