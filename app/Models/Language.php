<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Features\BaseManager;

class Language extends Model
{
    use HasFactory,BaseManager;

    protected array $withQuery = [];

    protected array $searchable = [];

    protected $hidden = ['id'];
}
