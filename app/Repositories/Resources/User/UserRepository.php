<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User;

use App\Models\User;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\User\Contracts\UserRepositoryContract;
use App\Repositories\Resources\User\Events\User\AfterCreate;
use App\Repositories\Resources\User\Events\User\AfterUpdate;
use App\Repositories\Resources\User\Events\User\BeforeCreate;
use App\Repositories\Resources\User\Events\User\BeforeUpdate;
use App\Repositories\Resources\User\Promoters\User\UserPromoterTrait;
use App\Repositories\Resources\User\PropertyHandlers\UserPropertyHandlerTrait;

/**
 * Class UserRepository
 * @package App\Repositories\Traits\User
 * @method $this role()
 * @method accessible()
 */
class UserRepository extends EloquentRepository implements UserRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use UserPromoterTrait;
    use GeneralPromoterTrait;
    use UserPropertyHandlerTrait;

    /**
     * @var string
     */
    protected static string $model = User::class;

    /**
     * update data for user model
     *
     * @param array $data
     * @param bool $id
     * @return array
     */
    public function update(array $data = [], bool $id = true): array
    {
        return parent::update($data, false);
    }
}
