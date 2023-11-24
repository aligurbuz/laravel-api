<?php

declare(strict_types=1);

namespace App\Factory\Http\Interfaces;

use App\Factory\Http\Http;
use App\Libs\Request\Request;

interface HttpInterface
{
    /**
     * @return Request
     * @see Http::local()
     */
    public function local(): Request;

    /**
     * @return Request
     * @see Http::socket()
     */
    public function socket(): Request;
}
