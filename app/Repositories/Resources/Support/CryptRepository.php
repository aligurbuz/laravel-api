<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support;

use App\Models\Crypt;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Support\Contracts\SupportCryptRepositoryContract;
use App\Repositories\Resources\Support\Events\Crypt\AfterCreate;
use App\Repositories\Resources\Support\Events\Crypt\AfterUpdate;
use App\Repositories\Resources\Support\Events\Crypt\BeforeCreate;
use App\Repositories\Resources\Support\Events\Crypt\BeforeUpdate;
use App\Repositories\Resources\Support\Promoters\Crypt\CryptPromoterTrait;
use App\Repositories\Resources\Support\PropertyHandlers\CryptPropertyHandlerTrait;

class CryptRepository extends EloquentRepository implements SupportCryptRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use CryptPromoterTrait;
    use GeneralPromoterTrait;
    use CryptPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Crypt::class;
}
