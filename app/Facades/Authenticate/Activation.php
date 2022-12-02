<?php

namespace App\Facades\Authenticate;

use App\Exceptions\Exception;
use App\Facades\Email\Email;
use App\Facades\Sms\Sms;
use App\Repositories\Repository;
use App\Services\AppContainer;

class Activation
{
    /**
     * @param object $user
     * @param callable $callback
     * @return array
     */
    public static function twoFactor(object $user, callable $callback): array
    {
        $activationData = static::get(Authenticate::code());

        if (isset($activationData['options']) && $activationData['options'] !== 'None') {
            $activationHandle = static::handle($activationData, (array)$user->toArray());

            if (count($activationHandle)) {
                return $activationHandle;
            }
        }

        return $callback();
    }

    /**
     * handle for auth activation
     *
     * @param array $activationData
     * @param array $user
     * @return array
     */
    public static function handle(array $activationData = [], array $user = []): array
    {
        $activationHandler = static::smsHandler($activationData, $user);

        if (!count($activationHandler)) {
            $activationHandler = static::emailHandler($activationData, $user);
        }

        if (!count($activationHandler)) {
            Repository::userActivation()->userCode($user['user_code'])->update([['hash' => time()]]);
        }

        return $activationHandler;
    }

    /**
     * @param array $activationData
     * @param array $user
     * @return array
     */
    protected static function smsHandler(array $activationData = [], array $user = []): array
    {
        if ($activationData['options'] == 'Sms') {
            static::throwExceptionIfActivationCodeNotValid($activationData);

            if (static::isNullActivationCode()) {
                Sms::to($user['phone'])
                    ->message('User activation code:' . $activationData['hash'])->send();

                return [
                    'activation_type' => 'Sms',
                    'activation_information' => trans('userActivation.sms', ['phone' => $user['phone']]),
                ];
            }
        }

        return [];
    }

    /**
     * @param array $activationData
     * @return array
     */
    protected static function throwExceptionIfActivationCodeNotValid(array $activationData = []): array
    {
        if (!static::isNullActivationCode() && client('activation_code') !== $activationData['hash']) {
            Exception::customException('invalidActivationCode');
        }

        return [];
    }

    /**
     * @return bool
     */
    protected static function isNullActivationCode(): bool
    {
        return is_null(client('activation_code'));
    }

    /**
     * @param array $activationData
     * @param array $user
     * @return array
     */
    protected static function emailHandler(array $activationData = [], array $user = []): array
    {
        if ($activationData['options'] == 'Email') {
            static::throwExceptionIfActivationCodeNotValid($activationData);

            if (static::isNullActivationCode()) {
                Email::userActivation($user['email'], $activationData['hash']);

                return [
                    'activation_type' => 'Email',
                    'activation_information' => trans('userActivation.email', ['email' => $user['email']])
                ];
            }
        }

        return [];
    }

    /**
     * get activation data for user model
     *
     * @param int $userCode
     * @return array
     */
    public static function get(int $userCode): array
    {
        return AppContainer::use('userActivation_' . $userCode, function () use ($userCode) {
            $userActivation = Repository::userActivation()->userCode($userCode)->latest();

            if (count($userActivation) && static::isNullActivationCode()) {
                $userUpdateActivation = Repository::userActivation()->userCode($userCode)->update([['hash' => rand(10000, 999999)]]);
                return $userUpdateActivation[0] ?? [];
            }

            return $userActivation;
        });
    }
}
