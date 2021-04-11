<?php

namespace App\Facades\Authenticate;

use App\Facades\FacadeManager;

class Authenticate extends FacadeManager
{
    /**
     * @var string
     */
    protected $facade = 'user';

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
    public static function id()
    {
        return (new self)->data->id ?? null;
    }

    /**
     * get username value for user data
     *
     * @return mixed
     */
    public static function username()
    {
        return (new self)->data->username ?? null;
    }

    /**
     * get name value for user data
     *
     * @return mixed
     */
    public static function name()
    {
        return (new self)->data->name ?? null;
    }

    /**
     * get email value for user data
     *
     * @return mixed
     */
    public static function email()
    {
        return (new self)->data->email ?? null;
    }
}
