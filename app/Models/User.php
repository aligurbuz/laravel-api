<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * Class User
 * @method $this toArray()
 * @method $this createToken($appName)
 * @method $this token()
 * @property mixed $status
 * @property mixed $is_deleted
 * @property mixed $user_code
 * @property mixed $plainTextToken
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, BaseManager, HasApiTokens;

    /**
     * @var array
     */
    protected array $searchable = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array[] $fillable
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
        'id',
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
        /**'comments' => [
         * 'foreignColumn' => 'user_id',
         * 'localColumn'   => 'id',
         * 'table' => 'user_comments',
         * 'description' => 'You can use comments relation belonging to user data.',
         * 'repository' => 'userComment',
         * ],**/
    ];
}
