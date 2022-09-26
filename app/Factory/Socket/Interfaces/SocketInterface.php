<?php

declare(strict_types=1);

namespace App\Factory\Socket\Interfaces;

use App\Factory\Socket\Socket;
use Illuminate\Foundation\Bus\PendingClosureDispatch;
use Illuminate\Foundation\Bus\PendingDispatch;

interface SocketInterface
{
    /**
     * @param mixed $hash
     * @param array $data
     * @return PendingDispatch|PendingClosureDispatch
     * @see Socket::order()
     */
    public function order(mixed $hash, array $data = []): PendingDispatch|PendingClosureDispatch;
}

