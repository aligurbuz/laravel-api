<?php

namespace App\Http\Middleware;

use Closure;
use App\Constants;
use Illuminate\Http\Request;
use App\Exceptions\Exception;
use App\Services\AppContainer;
use App\Repositories\Repository;

class AcceptLanguage
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        $contentType = $request->headers->get('accept-language');

        if(is_null($contentType)){
            Exception::customException('Accept-Language must be sent in the header request');
        }

        $repository = Repository::language()->findByName($contentType)->getRepository();

        if(!isset($repository[0]['language_code'])){
            Exception::customException('Accept-Language is not valid');
        }

        AppContainer::set(Constants::acceptLanguage,$repository[0]['language_code']);

        return $next($request);
    }
}
