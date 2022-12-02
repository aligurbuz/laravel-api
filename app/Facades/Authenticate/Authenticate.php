<?php

namespace App\Facades\Authenticate;

use App\Exceptions\Exception;
use App\Facades\FacadeManager;
use App\Repositories\Repository;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Support\Facades\Auth;

class Authenticate extends FacadeManager
{
    /**
     * @var string
     */
    protected string $facade = 'user';

    /**
     * @var string
     */
    protected string $code = 'user_code';

    /**
     * Authenticate constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->data = auth()->user();

        $this->code = ApiKey::isWeb() ? 'customer_code' : 'user_code';

    }

    /**
     * get authenticate guard for facade
     *
     * @return Guard|StatefulGuard
     */
    public static function guard() : Guard|StatefulGuard
    {
        // Note the authGuard helper method here.
        // this value can be obtained literally with the config/auth.php settings.
        // Every client that makes a request to the API comes with an apiKey key.
        // so this key is very important to authenticate.
        // @see App\Http\Controllers\Api\ApiController@getMiddlewares()
        return Auth::guard(authGuard());
    }

    /**
     * get authenticate user token for facade
     *
     * @return array
     */
    public static function createToken() : array
    {
        $user = static::guard()->user();

        $data = [];
        $data['user'] = $user;
        $data['auth']['token'] = $user->createToken(ApiKey::who())->plainTextToken;

        return $data;
    }

    /**
     * this method will provide laravel login directly.
     * If you don't want to make MakeActivation, you can use this method directly.
     *
     * @param string|null $email
     * @param string|null $password
     * @param callable|null $callback
     * @return mixed
     */
    public static function attempt(?string $email, ?string $password, ?callable $callback = null): mixed
    {
        // Note the authGuard helper method here.
        // this value can be obtained literally with the config/auth.php settings.
        // Every client that makes a request to the API comes with an apiKey key.
        // so this key is very important to authenticate.
        // @see App\Http\Controllers\Api\ApiController@getMiddlewares()
        $authGuard = Authenticate::guard();

        if ($authGuard->attempt(static::credentials($email, $password))) {

            // this code looks at the user's status and is_deleted fields.
            // It will throw an exception if the status field value is 0 or the is_deleted field is 1.
            User::isActive();

            // if a callback method is sent to the attempt method, this callback is executed.
            // if callback is not sent, token is created directly and returned with user data.
            return is_callable($callback) ? $callback($authGuard->user()) : static::createToken();
        }

        // if the system cannot authenticate the user,
        // it will throw an exception directly.
        return Exception::loginException();
    }

    /**
     * get data for authenticate
     *
     * @return array
     */
    public static function data(): array
    {
        return [(new self)->data->toArray()];
    }

    /**
     * get role_code value for user data
     *
     * @return int
     */
    public static function roleCode(): int
    {
        return (new self)->data->role_code ?? 0;
    }

    /**
     * get username value for user data
     *
     * @return ?string
     */
    public static function username(): ?string
    {
        return (new self)->data->username ?? null;
    }

    /**
     * get name value for user data
     *
     * @return ?string
     */
    public static function name(): ?string
    {
        return (new self)->data->name ?? null;
    }

    /**
     * get email value for user data
     *
     * @return ?string
     */
    public static function email(): ?string
    {
        return (new self)->data->email ?? null;
    }

    /**
     * get email value for user data
     *
     * @return ?string
     */
    public static function phone(): ?string
    {
        return (new self)->data->phone ?? null;
    }

    /**
     * checks if the authenticated user is superAdmin
     *
     * @param bool $exception
     * @return bool
     */
    public static function isSuper(bool $exception = false): bool
    {
        $superUser = Repository::superAdmin()->exists('user_code', static::code());

        if ($exception && !$superUser) {
            Exception::permissionException(['key' => endpoint()]);
        }

        return $superUser;
    }

    /**
     * get id value for user data
     *
     * @return int
     */
    public static function code(): int
    {
        $self = new self();

        $code = $self->code;

        return (new self)->data->{$code} ?? 0;
    }

    /**
     * get attempt credentials for facade
     *
     * @param string|null $email
     * @param string|null $password
     * @return array
     */
    public static function credentials(?string $email = null, ?string $password = null): array
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
