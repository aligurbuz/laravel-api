<?php

declare(strict_types=1);

namespace App\Facades\Role;

use App\Repositories\Repository;
use App\Services\AppContainer;

class Role
{
    /**
     * get role data for facade
     *
     * @return array
     */
    public static function get() : array
    {
        $userRole = AppContainer::use('role',function(){
            return Repository::user()->role()->memory();
        });

        return $userRole[0]['role'][0] ?? [];
    }

    /**
     * checks if the user is isAdmin for facade
     *
     * @return bool
     */
    public static function isAdmin() : bool
    {
        $isAdminValue = (static::get())['is_administrator'];

        return checkBool($isAdminValue);
    }
}
