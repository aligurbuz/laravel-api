<?php

namespace App\Client\User\User\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\User;

/**
 * Class GetClient
 * @package App\Client\User
 */
class UpdateClient extends Client
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
    protected array $model = [User::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [
        'user_code' => 'required'
    ];
}
