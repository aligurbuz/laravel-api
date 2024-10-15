<?php

declare(strict_types=1);

namespace App;

/**
 * Class Constants
 * @package App
 */
class Constants
{
    //exception status codes
    public const error400 = 400;
    public const error500 = 500;
    public const error401 = 401;
    public const error403 = 403;
    public const error404 = 404;

    public const apiPrefix = 'api';
    public const response = 'response';
    public const errorInput = 'errorInput';
    public const acceptLanguage = 'acceptLanguage';
    public const headerLangKey = 'accept-language';
    public const debugBackTrace = 'debugBackTrace';
    public const validatorRules = 'validatorRules';
    public const modelNamespace = 'App\Models';
    public const entity = 'App\Models\Entities';
    public const controllerNamespace = 'App\Http\Controllers';
    public const testFeatureNamespace = 'Tests\Feature';
    public const responseFormatterSupplement = 'responseFormatterSupplement';
    public const exceptionNotify = 'exceptionNotify';
    public const importsNamespace = 'App\Imports';
    public const exceptionNamespace = 'Exceptions\Custom';
    public const addScopeToEnd = 'addScopeToEnd';
    public const clientRepositoryRequest = 'clientRepositoryRequest';
    public const userCodeForFakeAuth = 'userCodeForFakeAuth';
}
