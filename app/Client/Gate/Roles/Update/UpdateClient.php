<?php

namespace App\Client\Gate\Roles\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Gate\Roles\RolesMainSupport;
use App\Exceptions\Exception;
use App\Models\Role;

class UpdateClient extends Client
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

    public int $isAdministrator;

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
    protected array $rule = ['role_code' => 'required|integer'];

    /**
     * @return void
     */
    public function isAdministrator(): void
    {
        Exception::customException('isAdministratorKey');
    }
}
