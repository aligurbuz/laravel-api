<?php

declare(strict_types=1);

namespace App\Factory\Request;

use App\Exceptions\Exception;
use App\Exceptions\Exception as ExceptionService;
use App\Facades\Authenticate\Activation;
use App\Facades\Authenticate\ApiKey;
use App\Factory\Request\Interfaces\RequestInterface;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/**
 * Class Request
 * @package App\Factory\Request
 */
class Request extends RequestManager implements RequestInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];


    /**
     * Request constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * the login request it is made
     *
     * @param string|null $email
     * @param string|null $password
     * @return array
     */
    public function login(?string $email = null, ?string $password = null): array
    {
        $authGuard = Auth::guard(authGuard());

        if ($authGuard->attempt(['email' => $email, 'password' => $password])) {

            /*** @var User $user */
            $user = Auth::guard(authGuard())->user();

            if ($user->is_deleted) {
                Exception::customException('deletedUser');
            }

            if (!$user->status) {
                Exception::customException('notActiveUser');
            }

            $data = [];
            $data['user'] = $user->toArray();

            $activationData = Activation::get($user->user_code);

            if (isset($activationData['options']) && $activationData['options'] !== 'None') {
                $activationHandle = Activation::handle($activationData, (array)$data['user']);
                if (count($activationHandle)) {
                    return $activationHandle;
                }
            }

            if ($data['user']['status'] && !$data['user']['is_deleted']) {
                $data['token'] = $user->createToken(ApiKey::who())->plainTextToken;

                return $data;
            }
        }

        return ExceptionService::loginException();
    }
}
