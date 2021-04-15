<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AccessLogger
 * @method static|$this create($data = [])
 * @package App\Models
 */
class AccessLogger extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable = [
        'client_key',
        'endpoint_name',
        'response_code',
        'http_method',
        'http_client_headers',
        'http_client_data',
        'response_status',
        'exception_file',
        'exception_line',
        'exception_message',
        'exception_trace',
        'response',
    ];
}
