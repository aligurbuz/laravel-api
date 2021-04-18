<?php 

namespace App\Repositories\User;

use App\Models\Comment;
use App\Repositories\EloquentRepository;
use App\Repositories\User\Contracts\CommentRepositoryContract;

class CommentRepository extends EloquentRepository implements CommentRepositoryContract
{
	protected static string $model = Comment::class;
}
