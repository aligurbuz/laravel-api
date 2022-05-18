<?php

namespace App\Client\Gate\Permissions\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Permission;

class CreateClient extends Client
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
    protected array $model = [Permission::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
