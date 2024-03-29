<?php

namespace App\Client\SuperAdmins\SuperAdmins\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\SuperAdmins\SuperAdmins\SuperAdminsMainSupport;
use App\Models\SuperAdmin;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use SuperAdminsMainSupport;

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
    protected array $model = [SuperAdmin::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
