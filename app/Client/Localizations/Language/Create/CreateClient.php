<?php

namespace App\Client\Localizations\Language\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Localizations\Language\LanguageMainSupport;
use App\Models\Language;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use LanguageMainSupport;

    /**
     * get capsule for client
     *
     * @var array
     */
    protected array $capsule = [];

    /**
     * get model entity validation
     *
     * @var array|string[]
     */
    protected array $model = [Language::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
