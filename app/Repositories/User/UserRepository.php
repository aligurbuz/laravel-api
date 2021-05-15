<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\EloquentRepository;
use App\Facades\Authenticate\Authenticate;
use App\Repositories\User\Contracts\UserRepositoryContract;

/**
 * Class UserRepository
 * @package App\Repositories\User
 */
class UserRepository extends EloquentRepository implements UserRepositoryContract
{
    /**
     * @var string
     */
    protected static string $model = User::class;

    /**
     * @var array|string[]
     */
    protected array $ranges = [];

    /**
     * get auto user range method
     *
     * @return object
     */
    public function userRepository() : object
    {
        return $this->globalScope()->where('id',Authenticate::id());
    }

    /**
     * update data for user model
     *
     * @param array $data
     * @param bool $id
     * @return array
     */
    public function update(array $data = [], $id = true): array
    {
        return parent::update($data,false);
    }
}
