<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Password\Promoters\Changes;

use App\Facades\Database\Authenticate\User;
use App\Facades\Support\Faker\Faker;
use App\Libs\Date;
use App\Models\Entities\PasswordChange;

trait ChangesPromoterTrait
{
    /**
     * @var string
     */
    public string $notificationAdapter = 'emailNotification';

    /**
     * type: second
     *
     * @var int
     */
    protected int $expirationTime = 180;

    /**
     * get auto ChangesRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function changesRepository(?object $builder = null): object
    {
        return $this->apply($builder)->addToEnd(['notDeleted']);
    }


    /**
     * get entity for repository
     *
     * @return PasswordChange
     */
    public function entity(): PasswordChange
    {
        return parent::entity();
    }

    /**
     * We check the timeout for client_time.
     *
     * @param string $clientTime
     * @return bool
     */
    public function isExpire(string $clientTime): bool
    {
        //If the password change time has passed, it will not return any results.
        return Date::isExpireAsSecond($clientTime, $this->expirationTime);
    }

    /**
     * When a request is made to the password/changes endpoint,
     * it sends an SMS to the user's phone with a use code.
     *
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
//        Sms::publish([
//            'phone' => $userPhone,
//            'hash' => $hash
//        ], 'passwordChange');
    }

    /**
     * When a request is made to the password/changes endpoint,
     * it sends an email to the user's email with a use code.
     *
     * @param string $hash
     * @return void
     * @see self::eventFireAfterCreate()
     *
     */
    public function emailNotification(string $hash): void
    {
        // we send the hash value to
        // the email address of the user for password change.
//        Email::publish([
//            'email' => User::email(),
//            'hash' => $hash
//        ],'passwordReset');
    }

    /**
     * get hash faker for repository
     *
     * @return string
     */
    public function hashFaker(): string
    {
        return (string)Faker::digitNumber();
    }
}
