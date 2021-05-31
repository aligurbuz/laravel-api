<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User_comment extends Model
{
    use HasFactory,BaseManager;

    /**
     * @var array
     */
    protected array $searchable = [];

    protected array $modelAppends = [];

    protected $withQuery = [
        'user' => [
            'foreignColumn' => 'id',
            'localColumn'   => 'user_id',
            'table' => 'users',
            'description' => 'You can use user relation belonging to user_comment data.',
            'repository' => 'user',
        ],
    ];

    /**
     * @return HasOne
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
