<?php

declare(strict_types=1);

namespace App\Factory\Socket;

use App\Facades\Http\Socket\Socket as RequestSocket;
use App\Factory\Socket\Interfaces\SocketInterface;

/**
 * Class Socket
 * @package App\Factory\Socket
 */
class Socket extends SocketManager implements SocketInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];


    /**
     * Socket constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * @param array $data
     */
    public function order(array $data = [])
    {
        return RequestSocket::createOrder($data);
    }
}
