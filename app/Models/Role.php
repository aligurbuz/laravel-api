<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, BaseManager;

    protected array $searchable = [];

    protected $casts = ['roles' => 'array'];

    protected array $withQuery = [];

    protected $hidden = ['id'];
}
