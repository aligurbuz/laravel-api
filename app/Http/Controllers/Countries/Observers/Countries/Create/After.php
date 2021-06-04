<?php

declare(strict_types=1);

namespace App\Http\Controllers\Countries\Observers\Countries\Create;

/**
 * Class Created
 * @package App\Http\Controllers\Countries\Observers\Countries\Create
 */
class After
{
    /**
     * @var array
     */
    protected array $data = [];

    /**
     * After constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }
}
