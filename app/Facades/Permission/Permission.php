<?php

namespace App\Facades\Permission;

use App\Factory\Factory;

class Permission
{
    /**
     * @var string|null
     */
    protected ?string $endpoint = null;

    /**
     * constructor for permission facade
     */
    public function __construct()
    {
        $this->endpoint = endpoint();
    }

    /**
     * get endpoint for permission
     *
     * @return string
     */
    protected static function endpoint() : string
    {
        return (new self())->endpoint;
    }

    /**
     * @return bool
     */
    public static function handle() : bool
    {
        return Factory::permission()->checkEndpoint();
    }
}
