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
        // It checks the accept-language value sent
        // by the client and throws an exception if necessary.
        $acceptLanguage = $this->checkAcceptLanguage($request);

        // it checks the existence of the repository class according
        // to the accept-language value and makes an sql query and returns code value
        $code = $this->checkRepository($acceptLanguage);

        //we assign the language_code value as the application container value.
        AppContainer::set(Constants::acceptLanguage,$code);

        return $next($request);
    }

    /**
     * check content type for middleware
     *
     * @param Request $request
     * @return string|null
     */
    private function checkAcceptLanguage(Request $request) : ?string
    {
        $acceptLanguage = $request->headers->get('accept-language');

        if(is_null($acceptLanguage)){
            Exception::customException('Accept-Language must be sent in the header request');
        }

        return $acceptLanguage;
    }

    /**
     * check repository for middleware
     *
     * @param ?string $contentType
     * @return array
     */
    private function checkRepository(?string $contentType) : array
    {
        $repository = Repository::language()->findByName($contentType)->getRepository();

        if(!isset($repository[0]['language_code'])){
            Exception::customException('Accept-Language is not valid');
        }

        return $repository[0]['language_code'];
    }
}
