<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable,BaseManager,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $withQuery = [
        'flights' => [
            'foreignColumn' => 'user_id',
            'localColumn'   => 'id',
            'table' => 'flights',
            'description' => 'You can use flights relation belonging to user data.'
        ],
    ];

    /**
     * @return HasMany
     */
    public function flights(): HasMany
    {
        return $this->hasMany(Flight::class,'user_id','id');
    }
}
