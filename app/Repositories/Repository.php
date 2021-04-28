<?php

namespace App\Repositories;

use App\Repositories\User\Contracts\UserRepositoryContract;
use App\Repositories\User\Contracts\CommentRepositoryContract;

/**
 * Class Repository
 * @package App\Repositories
 */
class Repository
{
    /**
     * get user repository instance
     *
     * @return UserRepositoryContract
     */
    public static function user() : UserRepositoryContract
    {
        return app()->get(UserRepositoryContract::class);
    }

    /**
     * get user comment repository instance
     *
     * @return CommentRepositoryContract
     */
    public static function userComment() : CommentRepositoryContract
    {
        return app()->get(CommentRepositoryContract::class);
    }
}
