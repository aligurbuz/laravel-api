<?php

namespace App\Repositories\User;

use App\Models\User_comment;
use App\Repositories\EloquentRepository;
use App\Repositories\User\Contracts\CommentRepositoryContract;

class CommentRepository extends EloquentRepository implements CommentRepositoryContract
{
    /**
     * @var string
     */
	protected static string $model = User_comment::class;

    /**
     * @var array|string[]
     */
    protected array $ranges = [];

    /**
     * get auto user range method
     *
     * @return object
     */
    public function commentRepository() : object
    {
        return $this->globalScope();
    }
}
