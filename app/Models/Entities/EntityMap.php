<?php

namespace App\Models\Entities;

class EntityMap
{
    //

    /**
     * @param object $query
     * @return User_comment
     */
    public function user_comment(object $query) : User_comment
    {
        return new User_comment($query);
    }

    /**
     * @param object $query
     * @return User
     */
    public function user(object $query) : User
    {
        return new User($query);
    }
}
