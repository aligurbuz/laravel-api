<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AccessLogger
 * @method static |$this create($data = [])
 * @package App\Models
 */
class AccessLogger extends Model
{
    use HasFactory, BaseManager;

    /**
     * @var array
     */
    protected array $searchable = [];
}
