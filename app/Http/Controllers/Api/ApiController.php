<?php

namespace App\Http\Controllers\Api;

use App\Exceptions\Exception;
use App\Facades\Database\Authenticate\ApiKey;
use App\Facades\Database\Authenticate\Guard;
use App\Factory\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class ApiController
 * @package App\Http\Controllers\Api
 */
class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests, Supporter, ApiAuthInhibitory;

    /**
     * @var array
     */
    protected array $middlewares = [
        'acceptLanguage',
        'general',
        'accessLogger',
        'response',
    ];

    /**
     * @var array
     */
    protected array $exceptMiddlewares = [];

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        Factory::apiKey();

        foreach ($this->getMiddlewares() as $middleware) {
            $this->exceptMiddlewares($middleware, function () use ($middleware) {
                $this->middleware($middleware);
            });
        }
    }

    /**
     * get middlewares for request
     *
     * @return array
     */
    private function getMiddlewares(): array
    {
        if (ApiKey::isSuperAdmin()) {
            $this->middlewares[] = 'superAdmin';
        }

        if (property_exists($this, 'authenticate') && !$this->authenticate && !isExistAuthorization()) {
            return $this->middlewares;
        }

        Guard::prefix('check');

        return array_merge(['auth:' . authGuard('check')], $this->middlewares);
    }

    /**
     * get except middleware process
     *
     * @param $middleware
     * @param callable $callback
     * @return mixed
     */
    private function exceptMiddlewares($middleware, callable $callback): mixed
    {
        $calledClass = get_called_class();
        $middlewares = $this->getMiddlewares();

        // we are conditionally removing
        // the concept of apiAuth authenticate.
        if ($middleware == ($middlewares[0] ?? null)) {
            if (!$this->apiAuthInhibitory()) {
                return false;
            }

            if ($this->apiAuthInhibitoryException) {
                Exception::permissionException(true, ['key' => endpoint()]);
            }
        }

        if (
            isset($this->exceptMiddlewares[$calledClass])
            && in_array($middleware, $this->exceptMiddlewares[$calledClass])
        ) {
            return false;
        }

        return call_user_func($callback);
    }
}
