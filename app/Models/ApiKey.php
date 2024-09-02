<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static where(string $string, array|bool|string|null $key)
 * @method static orderBy(string $string, string $string1)
 * @method static select(string[] $array)
 * @method static create(array $array)
 */
class ApiKey extends Model
{
    use HasFactory, BaseManager;

    protected array $searchable = [];

    protected array $withQuery = [];

    protected $hidden = ['id'];
}
