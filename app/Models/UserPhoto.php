<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPhoto extends Model
{
    use HasFactory, BaseManager;

    protected array $searchable = [];

    protected array $withQuery = [];

    protected $hidden = ['id'];
}
