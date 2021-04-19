<?php

namespace App\Client\User\User\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;

/**
 * Class GetClient
 * @package App\Client\User
 */
class GetUserClient extends Client
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
        'restaurant_code' => 'required|integer'
    ];
}
