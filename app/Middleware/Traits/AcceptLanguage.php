<?php

namespace App\Middleware\Traits;

use App\Constants;
use App\Exceptions\Exception;
use App\Facades\Database\Language\Language;
use App\Libs\AppContainer;
use Illuminate\Http\Request;

trait AcceptLanguage
{
    /**
     * Handle an incoming request.
     *
     * @return bool
     */
    protected function acceptLanguage(): bool
    {
        $request = \request();

        if (config('app.language') === false || endpoint() === 'localizations') {
            return true;
        }

        // It checks the accept-language value sent
        // by the client and throws an exception if necessary.
        $acceptLanguage = $this->checkAcceptLanguage($request);

        // it checks the existence of the repository class according
        // to the accept-language value and makes a sql query and returns code value
        $repositoryCode = $this->checkRepositoryCode($acceptLanguage);

        //we assign the language_code value as the application container value.
        AppContainer::set(Constants::acceptLanguage, $repositoryCode);

        return true;
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
        $language = Language::code($acceptLanguage);

        if(is_null($language)){
            Exception::customException(trans('exception.acceptLanguageNotValid'));
        }

        return $language;
    }
}
