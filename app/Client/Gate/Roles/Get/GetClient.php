<?php

namespace App\Client\Gate\Roles\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Gate\Roles\RolesMainSupport;
use App\Models\Role;

class GetClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use RolesMainSupport;

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
    protected array $model = [Role::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
