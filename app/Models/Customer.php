<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable, BaseManager, HasApiTokens;

    protected array $searchable = [];

    protected array $withQuery = [];

    protected $hidden = ['id', 'password'];
}
