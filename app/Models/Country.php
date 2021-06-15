<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Features\BaseManager;

class Country extends Model
{
    use HasFactory,BaseManager;

        protected array $searchable = [];

        protected $hidden = ['id'];
}
