<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Features\BaseManager;

/**
 * Class AccessLogger
 * @method static|$this create($data = [])
 * @package App\Models
 */
class AccessLogger extends Model
{
    use HasFactory,BaseManager;

    /**
     * @var array
     */
    protected array $searchable = [];
}
