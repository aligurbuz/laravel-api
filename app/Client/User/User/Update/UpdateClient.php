<?php

namespace App\Client\User\User\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Exceptions\Exception;
use App\Facades\Authenticate\Authenticate;
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
     * @var string|int
     */
    protected string|int $userCode;

    /**
     * @var string|int
     */
    protected string|int $roleCode;

    /**
     * @var string|int|bool
     */
    protected string|int|bool $status;

    /**
     * @return int
     */
    protected function userCode(): int
    {
        return $this->userCode;
    }

    /**
     * @return string|int
     */
    protected function roleCode(): string|int
    {
        //the user cannot change own role if that is not admin.
        Exception::ifTrue(!Role::isAdmin(), 'userRoleUpdatePermission');

        return $this->roleCode;
    }

    /**
     * @return string|int|bool
     */
    protected function status(): string|int|bool
    {
        // we will not allow user to make passive self.
        if(!checkBool($this->status) && (int)$this->userCode === Authenticate::code()){
            Exception::customException('userOwnPassive');
        }

        //the user cannot change any user's status if that is not admin.
        Exception::ifTrue(!Role::isAdmin(), 'userStatusUpdatePermission');

        return $this->status;
    }

    /**
     * @return string|int|bool
     */
    protected function isDeleted(): string|int|bool
    {
        $isDeleted = parent::isDeleted();

        // we will not allow user to delete self.
        if($isDeleted && (int)$this->userCode === Authenticate::code()){
            Exception::customException('userOwnDeleting');
        }

        //the user cannot make any user's deleting if that is not admin.
        Exception::ifTrue(!Role::isAdmin(), 'userIsDeletedUpdatePermission');

        return $isDeleted;
    }
}
