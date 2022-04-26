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
}
