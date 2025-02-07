<?php

namespace App\Client\User\Password\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\User\Password\PasswordMainSupport;
use App\Models\UserPassword;

class GetClient extends Client
{
    use GeneratorTrait;
    use PasswordMainSupport;
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
    protected array $model = [UserPassword::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
