<?php

namespace App\Http\Middleware;

use App\Exceptions\Exception;
use Closure;
use Illuminate\Http\Request;

class ContentType
{
    /**
     * The formats that must be sent in the client request.
     *
     * @var array
     */
    protected array $validContentTypes = [
        'application/json',
        'application/xml',
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

        return $next($request);
    }
}
