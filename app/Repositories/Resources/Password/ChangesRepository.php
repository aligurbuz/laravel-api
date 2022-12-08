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

    /**
     * @var string
     */
    public string $notificationAdapter = 'smsNotification';

    /**
     * type: second
     *
     * @var int
     */
    protected int $expirationTime = 180;

    /**
     * We are checking the date for the get operation. so we will process the main function.
     *
     * @return array
     */
    public function get(): array
    {
        $result = parent::get();

        //If the password change time has passed, it will not return any results.
        if (Date::isExpireAsSecond($result[0]['client_time'], $this->expirationTime)) {
            return [];
        }

        return $result;
    }

    /**
     * When a request is made to the password/changes endpoint,
     * it sends an SMS to the user's phone with a use code.
     *
     * @param string $hash
     * @return void
     */
    public function smsNotification(string $hash): void
    {
        // user container value changed in eventFireBeforeCreate method
        // @see $this->eventFireBeforeCreate()
        $userPhone = User::phone(true);

        Sms::to($userPhone)->message('Password Reset Code: ' . $hash)->send();
    }

    /**
     * When a request is made to the password/changes endpoint,
     * it sends an email to the user's email with a use code.
     *
     * @param string $hash
     * @return void
     */
    public function emailNotification(string $hash): void
    {
        Email::passwordReset(User::email(), $hash);
    }
}
