<?php

namespace App\Facades\Authenticate;

use App\Exceptions\Exception;
use App\Exceptions\Exception as ExceptionService;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login
{
    /**
     * the login request for facade
     *
     * @param string|null $email
     * @param string|null $password
     * @return array
     */
    public static function make(?string $email = null, ?string $password = null): array
    {
        return static::attempt($email, $password, static function (User $user) {

            // this code looks at the user's status and is_deleted fields.
            // It will throw an exception if the status field value is 0 or the is_deleted field is 1.
            static::checkUserActive($user);

            // if the user validates with the two-factor system,
            // we check it here with the makeActivation method.
            // two-factory system : sms or email checking
            return static::makeActivation($user, callback: static function () use ($user) {
                $data = [];
                $data['user'] = $user;
                $user['token'] = $user->createToken(ApiKey::who())->plainTextToken;

                return $data;
            });
        });
    }

    /**
     * check user active for facade
     *
     * @param User $user
     * @return void
     */
    private static function checkUserActive(User $user): void
    {
        if ($user->is_deleted) {
            Exception::customException('deletedUser');
        }

        if (!$user->status) {
            Exception::customException('notActiveUser');
        }
    }

    /**
     * @param User $user
     * @param callable $callback
     * @return array
     */
    private static function makeActivation(User $user, callable $callback): array
    {
        $activationData = Activation::get($user->user_code);

        if (isset($activationData['options']) && $activationData['options'] !== 'None') {
            $activationHandle = Activation::handle($activationData, (array)$user->toArray());
            if (count($activationHandle)) {
                return $activationHandle;
            }
        }

        return $callback();
    }

    /**
     * @param string|null $email
     * @param string|null $password
     * @param callable $callback
     * @return mixed
     */
    private static function attempt(?string $email, ?string $password, callable $callback): mixed
    {
        $authGuard = Auth::guard(authGuard());

        if ($authGuard->attempt(static::attemptCredentials($email, $password))) {
            return $callback($authGuard->user());
        }

        // if the system cannot authenticate the user,
        // it will throw an exception directly.
        return ExceptionService::loginException();
    }

    /**
     * get attempt credentials for facade
     *
     * @param string|null $email
     * @param string|null $password
     * @return array
     */
    private static function attemptCredentials(?string $email = null, ?string $password = null): array
    {
        $clientData = client();

        if (isset($clientData['username'])) {
            return [
                'username' => $clientData['username'],
                'password' => $password ?? $clientData['password']
            ];
        }

        return [
            'email' => $email ?? $clientData['email'],
            'password' => $password ?? $clientData['password']
        ];
    }
}
