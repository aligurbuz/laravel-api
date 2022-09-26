<?php

declare(strict_types=1);

namespace App\Factory\Socket\Interfaces;

use App\Factory\Socket\Socket;

interface SocketInterface
{
    /**
     * @param array $data
     * @see Socket::order()
     */
    public function order(array $data = []);
}

