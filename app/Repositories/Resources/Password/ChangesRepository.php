<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Password;

use App\Facades\Authenticate\User;
use App\Facades\Email\Email;
use App\Facades\Sms\Sms;
use App\Models\PasswordChange;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Password\Contracts\PasswordChangesRepositoryContract;
use App\Repositories\Resources\Password\Events\Changes\AfterCreate;
use App\Repositories\Resources\Password\Events\Changes\AfterUpdate;
use App\Repositories\Resources\Password\Events\Changes\BeforeCreate;
use App\Repositories\Resources\Password\Events\Changes\BeforeUpdate;
use App\Repositories\Resources\Password\Promoters\Changes\ChangesPromoterTrait;
use App\Repositories\Resources\Password\PropertyHandlers\ChangesPropertyHandlerTrait;
use App\Services\Date;

class ChangesRepository extends EloquentRepository implements PasswordChangesRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use ChangesPromoterTrait;
    use GeneralPromoterTrait;
    use ChangesPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = PasswordChange::class;

}
