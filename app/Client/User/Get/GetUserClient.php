<?php

namespace App\Client\User\Get;

use App\Client\Client;

/**
 * Class GetClient
 * @package App\Client\User
 */
class GetUserClient extends Client
{
    use GeneratorTrait;

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
        'id' => 'required|integer'
    ];
}
