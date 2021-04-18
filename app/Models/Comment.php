<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Features\BaseManager;

class Comment extends Model
{
    use HasFactory,BaseManager;

    protected $table = 'user_comments';
}
