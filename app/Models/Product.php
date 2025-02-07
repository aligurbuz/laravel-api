<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Features\BaseManager;

class Product extends Model
{
    use BaseManager;

    protected array $searchable = [];

    protected array $withQuery = [];

    protected $hidden = ['id'];
    //
}
