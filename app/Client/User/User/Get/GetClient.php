<?php

namespace App\Client\User\User\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\User\User\UserMainSupport;
use App\Models\User;

/**
 * Class GetClient
 * @package App\Client\User
 */
class GetClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use UserMainSupport;

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
        //'id' => 'required|integer'
    ];
}
