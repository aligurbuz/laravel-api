<?php

namespace App\Client\Gate\Permissions\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Permission;

class UpdateClient extends Client
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
    protected array $rule = ['permission_code' => 'required|integer'];
}
