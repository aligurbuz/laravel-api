<?php

namespace App\Client\User\User\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\User\User\UserMainSupport;
use App\Models\User;

/**
 * Class GetClient
 * @package App\Client\User
 */
class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use UserMainSupport;

    /**
     * get capsule for client
     *
     * @var array
     */
    protected array $capsule = ['registration_code'];

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
        'name' => 'required|max:50',
        'email' => 'required',
        'password' => 'required|atLeastUpperLowerNumber|min:6',
        'username' => 'required|string',
    ];
}
