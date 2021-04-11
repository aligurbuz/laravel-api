<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\EloquentRepository;
use App\Repositories\EloquentRepositoryContract;
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
    protected static $model = User::class;
}
