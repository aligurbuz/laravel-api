<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Repositories\User\Contracts\UserRepositoryContract;
use App\Repositories\User\Contracts\CommentRepositoryContract;
use App\Repositories\Logger\Contracts\LoggerRepositoryContract;

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

    /**
     * get logger repository instance
     *
     * @return LoggerRepositoryContract
     */
    public static function logger() : LoggerRepositoryContract
    {
        return app()->get(LoggerRepositoryContract::class);
    }
}
