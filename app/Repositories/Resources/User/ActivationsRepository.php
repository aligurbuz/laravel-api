<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User;

use App\Models\UserActivation;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\User\Contracts\UserActivationsRepositoryContract;
use App\Repositories\Resources\User\Events\Activations\AfterCreate;
use App\Repositories\Resources\User\Events\Activations\AfterUpdate;
use App\Repositories\Resources\User\Events\Activations\BeforeCreate;
use App\Repositories\Resources\User\Events\Activations\BeforeUpdate;
use App\Repositories\Resources\User\Promoters\Activations\ActivationsPromoterTrait;
use App\Repositories\Resources\User\PropertyHandlers\ActivationsPropertyHandlerTrait;

class ActivationsRepository extends EloquentRepository implements UserActivationsRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use ActivationsPromoterTrait;
    use GeneralPromoterTrait;
    use ActivationsPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = UserActivation::class;
}
