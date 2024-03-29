<?php

namespace App\Facades\Support\Socket;

use App\Jobs\Socket as JobSocket;

class Socket
{
    /**
     * It was made for you to send
     * the order data to the socket channel when the order is created.
     *
     * @param mixed $hash
     * @param array $data
     * @return void
     */
    public static function order(mixed $hash, array $data = []): void
    {
        dispatch(new JobSocket(__FUNCTION__, $hash, $data));
    }
}
