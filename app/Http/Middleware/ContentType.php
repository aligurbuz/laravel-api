<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Exceptions\Exception;
use App\Services\AppContainer;

class ContentType
{
    /**
     * The formats that must be sent in the client request.
     *
     * @var array
     */
    protected array $validContentTypes = [
        'application/json',
        //'application/xml',
    ];

    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $contentType = $request->headers->get('content-type');

        if(!in_array($contentType,$this->validContentTypes)){
           Exception::contentTypeException('',['key' => implode(',',$this->validContentTypes)]);
        }

        // when this container value is assigned,
        // we can read the client content-type value from anywhere in the application request.
        $this->setContainerContentTye($contentType);

        return $next($request);
    }

    /**
     * set container content type
     *
     * @param $contentType
     * @return void
     */
    private function setContainerContentTye($contentType) : void
    {
        $contentTypeExplode = explode('/',$contentType);

        AppContainer::set('contentType',($contentTypeExplode[1] ?? config('app.defaultApiResponseFormatter')));
    }
}
