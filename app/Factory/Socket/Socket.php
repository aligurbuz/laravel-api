<?php

declare(strict_types=1);

namespace App\Factory\Socket;

use App\Factory\Socket\Interfaces\SocketInterface;
use App\Jobs\Socket as JobSocket;
use Illuminate\Foundation\Bus\PendingClosureDispatch;
use Illuminate\Foundation\Bus\PendingDispatch;

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
     * @param mixed $hash
     * @param array $data
     * @return PendingClosureDispatch|PendingDispatch
     */
    public function order(mixed $hash, array $data = []): PendingDispatch|PendingClosureDispatch
    {
        return dispatch(new JobSocket($hash, $data));
    }
}
