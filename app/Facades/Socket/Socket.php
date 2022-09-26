<?php

namespace App\Facades\Socket;

use App\Jobs\OrderSocket;

class Socket
{
    /**
     * @param mixed $hash
     * @param array $data
     * @return void
     */
    public static function order(mixed $hash,array $data = []): void
    {
        dispatch(new OrderSocket($hash,$data));
    }
}
