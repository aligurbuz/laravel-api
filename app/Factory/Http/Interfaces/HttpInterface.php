<?php

declare(strict_types=1);

namespace App\Factory\Http\Interfaces;

use App\Factory\Http\Http;
use App\Services\Request\Request;

interface HttpInterface
{
    /**
     * @return Request
     * @see Http::local()
     */
    public function local() : Request;
}
