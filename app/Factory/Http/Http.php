<?php

declare(strict_types=1);

namespace App\Factory\Http;

use App\Factory\Http\Interfaces\HttpInterface;
use App\Libs\Request\Request;

/**
 * Class Http
 * @package App\Factory\Http
 */
class Http extends HttpManager implements HttpInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * @var Request|null
     */
    protected ?Request $request = null;

    /**
     * Http constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
        $this->request = new Request();
    }

    /**
     * get local client request
     *
     * @return Request
     */
    public function local(): Request
    {
        return $this->request->setHeaders([
                'Apikey' => config('apikey.admin'),
                'Authorization' => '',
                'Accept-Language' => 'en'
            ]
        )->setUrl('http://172.10.0.13/api/public/api');
    }

    /**
     * get socket client request
     *
     * @return Request
     */
    public function socket(): Request
    {
        $socketAdapter = config('socket.adapter');
        $socketConnection = config('socket.connection.' . $socketAdapter);

        return $this->request->setHeaders([]
        )->setUrl($socketConnection['socketUrl']);
    }
}
