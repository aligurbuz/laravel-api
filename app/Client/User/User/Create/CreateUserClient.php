<?php

namespace App\Client\User\User\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\User;

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
    protected array $model = [User::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [
        'name'      => 'required|max:50',
        'email'     => 'required',
        'password'  => 'required',
        'username'  => 'required|max:20',
    ];

    /**
     * get array limiter
     *
     * @return int
     */
    public function getArrayLimiter(): int
    {
        return 1;
    }
}
