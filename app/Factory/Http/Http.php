<?php

declare(strict_types=1);

namespace App\Factory\Http;

use App\Constants;
use App\Facades\Database\Authenticate\ApiKey;
use App\Factory\Http\Interfaces\HttpInterface;
use App\Libs\AppContainer;
use App\Libs\HashGenerator;
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
        $userCode = AppContainer::get(Constants::userCodeForFakeAuth);
        $generator = new HashGenerator();
        $hashCode = $generator->encode((string)$userCode);

        $apiKey = $this->binds['apiKey'] ?? 'admin';

        return $this->request->setHeaders([
                'Apikey' => ApiKey::get($apiKey)->value,
                'Authorization' => '',
                'Accept-Language' => 'en',
                'fakeAuth' => $hashCode
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
