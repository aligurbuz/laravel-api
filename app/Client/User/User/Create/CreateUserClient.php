<?php

namespace App\Client\User\User\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;

/**
 * Class GetClient
 * @package App\Client\User
 */
class CreateUserClient extends Client
{
    use GeneratorTrait,ClientAutoGeneratorTrait;

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
    protected array $model = ['user'];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [
        //'id' => 'required|integer'
    ];
}
