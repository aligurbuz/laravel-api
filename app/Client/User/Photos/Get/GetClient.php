<?php

namespace App\Client\User\Photos\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\UserPhoto;

class GetClient extends Client
{
    use GeneratorTrait;
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
    protected array $model = [UserPhoto::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
