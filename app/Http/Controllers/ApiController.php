<?php

namespace App\Http\Controllers;

use App\Facades\Authenticate\ApiKey;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Route;

/**
 * Class ApiController
 * @package App\Http\Controllers
 */
class ApiController extends BaseController
{
    use AuthorizesRequests,DispatchesJobs,ValidatesRequests,Supporter,ApiAuthInhibitory;

    /**
     * @var static authApi
     */
    protected const authApi = 'auth:api';

    /**
     * @var array
     */
    protected array $middlewares = [
        'auth:api',
        'acceptLanguage',
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
        foreach ($this->getMiddlewares() as $middleware){
            $this->exceptMiddlewares($middleware,function() use($middleware){
                $this->middleware($middleware);
            });
        }
    }

    /**
     * get except middleware process
     *
     * @param $middleware
     * @param callable $callback
     * @return mixed
     */
    private function exceptMiddlewares($middleware,callable $callback): mixed
    {
        $calledClass = get_called_class();

        // we are conditionally removing
        // the concept of apiAuth authenticate.
        if($middleware==self::authApi){
            if(!$this->apiAuthInhibitory($calledClass)){
                return false;
            }
        }

        if(
            isset($this->exceptMiddlewares[$calledClass])
            && in_array($middleware,$this->exceptMiddlewares[$calledClass])
        ){
            return false;
        }

        return call_user_func($callback);
    }

    /**
     * get middlewares for request
     *
     * @return array
     */
    private function getMiddlewares() : array
    {
        if(ApiKey::isSuperAdmin()){
            $this->middlewares[] = 'superAdmin';
        }

        return $this->middlewares;
    }
}
