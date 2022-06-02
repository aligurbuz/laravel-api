<?php

namespace App\Facades\Authenticate;

use App\Exceptions\Exception;
use App\Facades\FacadeManager;
use App\Repositories\Repository;

class Authenticate extends FacadeManager
{
    /**
     * @var string
     */
    protected string $facade = 'user';

    /**
     * Authenticate constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->data = auth()->user();
    }

    /**
     * get id value for user data
     *
     * @return int
     */
    public static function code(): int
    {
        return (new self)->data->user_code ?? 0;
    }

    /**
     * get role_code value for user data
     *
     * @return int
     */
    public static function role_code(): int
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
}
