<?php

namespace App\Client\Auth\Verifying\Create;

use App\Client\Auth\Verifying\VerifyingMainSupport;
use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use VerifyingMainSupport;

    /**
     * get capsule for client
     *
     * @var array
     */
    protected array $capsule = ['hash'];

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
        'hash' => 'required'
    ];
}
