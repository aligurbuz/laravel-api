<?php

namespace App\Client\Gate\Permissions\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Gate\Permissions\PermissionsMainSupport;
use App\Models\Permission;

class GetClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use PermissionsMainSupport;

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
