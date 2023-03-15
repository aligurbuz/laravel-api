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
     * We check the timeout for client_time.
     *
     * @param array $result
     * @return bool
     */
    public function isExpire(array $result = []): bool
    {
        //If the password change time has passed, it will not return any results.
        return (
            isset($result['client_time'])
            && Date::isExpireAsSecond($result['client_time'], $this->expirationTime)
        );
    }

    /**
     * When a request is made to the password/changes endpoint,
     * it sends an SMS to the user's phone with a use code.
     * @param string $hash
     * @return void
     * @see self::eventFireAfterCreate()
     *
     */
    public function smsNotification(string $hash): void
    {
        // user container value changed in eventFireBeforeCreate method
        $userPhone = User::phone(true);

        // we send the hash value to
        // the phone number of the user for password change.
        Sms::passwordChange($userPhone, $hash);
    }

    /**
     * When a request is made to the password/changes endpoint,
     * it sends an email to the user's email with a use code.
     * @param string $hash
     * @return void
     * @see self::eventFireAfterCreate()
     *
     */
    public function emailNotification(string $hash): void
    {
        // we send the hash value to
        // the email address of the user for password change.
        Email::passwordReset(User::email(), $hash);
    }
}
