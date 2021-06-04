<?php

declare(strict_types=1);

namespace App\Http\Controllers\Countries\Observers\Countries\Create;

/**
 * Class Creating
 * @package App\Http\Controllers\Countries\Observers\Countries\Create
 */
class Before
{
    /**
     * @var array
     */
    protected array $client = [];

    /**
     * Creating constructor.
     * @param array $client
     */
    public function __construct(array $client = [])
    {
        $this->client = $client;
    }
}
