<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Logger extends Model
{
    use HasFactory, Notifiable,BaseManager,HasApiTokens;

    /**
     * @var string[] $table
     */
    protected $table = 'logger';

    /**
     * @var array
     */
    protected array $fillable = [
        'controller_name',
        'endpoint',
        'http_method',
        'get_data',
        'post_data',
        'put_data',
        'headers',
        'status',
        'error_message',
        'error_file',
        'error_line',
    ];
}
