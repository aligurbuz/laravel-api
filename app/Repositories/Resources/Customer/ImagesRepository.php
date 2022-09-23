<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer;

use App\Models\CustomerImage;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Customer\Contracts\CustomerImagesRepositoryContract;
use App\Repositories\Resources\Customer\Events\Images\AfterCreate;
use App\Repositories\Resources\Customer\Events\Images\AfterUpdate;
use App\Repositories\Resources\Customer\Events\Images\BeforeCreate;
use App\Repositories\Resources\Customer\Events\Images\BeforeUpdate;
use App\Repositories\Resources\Customer\Promoters\Images\ImagesPromoterTrait;
use App\Repositories\Resources\Customer\PropertyHandlers\ImagesPropertyHandlerTrait;

class ImagesRepository extends EloquentRepository implements CustomerImagesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use ImagesPromoterTrait;
    use GeneralPromoterTrait;
    use ImagesPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = CustomerImage::class;
}
