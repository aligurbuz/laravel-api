<?php

namespace App\Http\Middleware;

use App\Constants;
use App\Exceptions\Exception;
use App\Repositories\Repository;
use App\Libs\AppContainer;
use Closure;
use Illuminate\Http\Request;

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
        if (config('app.language') === false) {
            return $next($request);
        }

        // It checks the accept-language value sent
        // by the client and throws an exception if necessary.
        $acceptLanguage = $this->checkAcceptLanguage($request);

        // it checks the existence of the repository class according
        // to the accept-language value and makes a sql query and returns code value
        $repositoryCode = $this->checkRepositoryCode($acceptLanguage);

        //we assign the language_code value as the application container value.
        AppContainer::set(Constants::acceptLanguage, $repositoryCode);

        return $next($request);
    }

    /**
     * check accept-language for middleware
     *
     * @param Request $request
     * @return string|null
     */
    private function checkAcceptLanguage(Request $request): ?string
    {
        $acceptLanguage = $request->headers->get(Constants::headerLangKey);

        if (is_null($acceptLanguage)) {
            return Exception::customException(trans('exception.acceptLanguageNotIn'));
        }

        return $acceptLanguage;
    }

    /**
     * check repository-code for middleware
     *
     * @param string|null $acceptLanguage
     * @return mixed
     */
    private function checkRepositoryCode(?string $acceptLanguage): mixed
    {
        $repository = Repository::language()->name($acceptLanguage)->getRepository();

        return $repository[0]['language_code'] ?? Exception::customException(trans('exception.acceptLanguageNotValid'));
    }
}
