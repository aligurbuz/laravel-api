<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests,Supporter;

    /**
     * @var array
     */
    protected array $middlewares = [
        'apiKey',
        'AcceptLanguage',
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
        foreach ($this->middlewares as $middleware){
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

        if(
            isset($this->exceptMiddlewares[$calledClass])
            && in_array($middleware,$this->exceptMiddlewares[$calledClass])
        ){
            return false;
        }

        return call_user_func($callback);
    }
}
