<?php

namespace App\Client\SuperAdmins\SuperAdmins\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\SuperAdmins\SuperAdmins\SuperAdminsMainSupport;
use App\Models\SuperAdmin;

class UpdateClient extends Client
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
    protected array $rule = ['super_admin_code' => 'required|integer'];
}
