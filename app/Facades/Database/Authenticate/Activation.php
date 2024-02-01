<?php

namespace App\Facades\Database\Authenticate;

use App\Exceptions\Exception;
use App\Facades\Support\Email\Email;
use App\Facades\Support\Sms\Sms;
use App\Libs\AppContainer;
use App\Repositories\Repository;

class Activation
{
    /**
     * two-factor system for activation facade
     *
     * @param callable $callback
     * @return array
     */
    public static function twoFactor(callable $callback): array
    {
        /*** @var object $user */
        $user = Guard::get()->user();

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
     * get activation data for user model
     *
     * @param int $userCode
     * @return array
     */
    public static function get(int $userCode): array
    {
        return AppContainer::use('userActivation_' . $userCode, static function () use ($userCode) {
            $userActivation = Repository::userActivation()->userCode($userCode)->latest();

            if (count($userActivation) && static::isNullActivationCode()) {
                $userUpdateActivation = Repository::userActivation()->userCode($userCode)->update([['hash' => random_int(10000, 999999)]]);
                return $userUpdateActivation[0] ?? [];
            }

            return $userActivation;
        });
    }

    /**
     * @return bool
     */
    protected static function isNullActivationCode(): bool
    {
        return is_null(client('activation_code'));
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
        if ($activationData['options'] === 'Sms') {
            static::throwExceptionIfActivationCodeNotValid($activationData);

            if (static::isNullActivationCode()) {
                Sms::publish([
                    'phone' => $user['phone'],
                    'hash' => $activationData['hash']
                ], 'userActivation');

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
     * @param array $activationData
     * @param array $user
     * @return array
     */
    protected static function emailHandler(array $activationData = [], array $user = []): array
    {
        if ($activationData['options'] === 'Email') {
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
}
