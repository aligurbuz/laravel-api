<?php

namespace App\Models;

use App\Models\Features\BaseManager;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Localization extends Model
{
    use HasFactory, BaseManager;

    protected array $searchable = [];

    protected $hidden = ['id'];

    protected $casts = ['values' => 'array'];

    protected $withQuery = [
        'language' => [
            'foreignColumn' => 'language_code',
            'localColumn' => 'language_code',
            'table' => 'languages',
            'description' => 'You can use language relation belonging to localization data.',
            'repository' => 'language',
        ],
    ];

    /**
     * @return HasOne
     */
    public function language(): HasOne
    {
        return $this->hasOne(Language::class, 'language_code', 'language_code');
    }
}
