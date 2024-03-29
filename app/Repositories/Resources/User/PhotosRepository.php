<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User;

use App\Models\UserPhoto;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\User\Contracts\PhotosRepositoryContract;
use App\Repositories\Resources\User\Events\Photos\AfterCreate;
use App\Repositories\Resources\User\Events\Photos\AfterUpdate;
use App\Repositories\Resources\User\Events\Photos\BeforeCreate;
use App\Repositories\Resources\User\Events\Photos\BeforeUpdate;
use App\Repositories\Resources\User\Promoters\Photos\PhotosPromoterTrait;
use App\Repositories\Resources\User\PropertyHandlers\PhotosPropertyHandlerTrait;

class PhotosRepository extends EloquentRepository implements PhotosRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use PhotosPromoterTrait;
    use GeneralPromoterTrait;
    use PhotosPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = UserPhoto::class;
}
