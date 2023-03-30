<?php

namespace App\Client\User\User\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Exceptions\Exception;
use App\Facades\Role\Role;
use App\Models\User;

/**
 * Class GetClient
 * @package App\Client\User
 */
class UpdateClient extends Client
{
    use GeneratorTrait, ClientAutoGeneratorTrait;

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
    protected array $model = [User::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [
        'user_code' => 'required'
    ];

    /**
     * @var int
     */
    protected int $roleCode;

    /**
     * @return int
     */
    protected function roleCode() : int
    {
        //the user cannot change own role if that is not admin.
        Exception::ifTrue(!Role::isAdmin(),'UserRolePermission');

        return $this->roleCode;
    }
}
