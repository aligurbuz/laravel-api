<?php

namespace App\Facades\Authenticate;

use App\Facades\FacadeManager;

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
     * @return mixed
     */
    public static function code(): mixed
    {
        return (new self)->data->user_code ?? 0;
    }

    /**
     * get role_code value for user data
     *
     * @return mixed
     */
    public static function role_code(): mixed
    {
        return (new self)->data->role_code ?? 0;
    }

    /**
     * get username value for user data
     *
     * @return mixed
     */
    public static function username(): mixed
    {
        return (new self)->data->username ?? null;
    }

    /**
     * get name value for user data
     *
     * @return mixed
     */
    public static function name(): mixed
    {
        return (new self)->data->name ?? null;
    }

    /**
     * get email value for user data
     *
     * @return mixed
     */
    public static function email(): mixed
    {
        return (new self)->data->email ?? null;
    }
}
