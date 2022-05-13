<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User;

use App\Models\User;
use App\Repositories\EloquentRepository;
use App\Repositories\Resources\User\Events\User\AfterCreate;
use App\Repositories\Resources\User\Events\User\AfterUpdate;
use App\Repositories\Resources\User\Events\User\BeforeCreate;
use App\Repositories\Resources\User\Events\User\BeforeUpdate;
use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use App\Repositories\Resources\User\PropertyHandlers\UserPropertyHandlerTrait;

/**
 * Class UserRepository
 * @package App\Repositories\Resources\User
 * @method $this role()
 */
class UserRepository extends EloquentRepository implements UserRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use UserPropertyHandlerTrait;

    /**
     * @var string
     */
    protected static string $model = User::class;

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
