<?php

declare(strict_types=1);

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\EloquentRepository;
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
     * @param object|null $builder
     * @return object
     */
    public function userRepository(?object $builder = null) : object
    {
        return $this->apply($builder);
    }

    /**
     * update data for user model
     *
     * @param array $data
     * @param bool $id
     * @return array
     */
    public function update(array $data = [], bool $id = true): array
    {
        return parent::update($data,false);
    }
}
