<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory, BaseManager;

    protected array $withQuery = [];

    protected array $searchable = [];

    protected $hidden = ['id'];
}
