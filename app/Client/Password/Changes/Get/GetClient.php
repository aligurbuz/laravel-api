<?php

namespace App\Client\Password\Changes\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Password\Changes\ChangesMainSupport;
use App\Models\PasswordChange;

class GetClient extends Client
{
    use GeneratorTrait;
    use ChangesMainSupport;
    use ClientAutoGeneratorTrait;

    /**
     * get capsule for client
     *
     * @var array
     */
    protected array $capsule = [];

    protected array $capsuleComments = [
        'email' => 'Represents the user\'s email address for filtering.',
        'hash' => 'Represents the hash value required for the validator. It is sent to the user by the system.',
    ];

    /**
     * get model entity validation
     *
     * @var array|string[]
     */
    protected array $model = [PasswordChange::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [
        'email' => 'required',
        'hash' => 'required',
    ];
}
