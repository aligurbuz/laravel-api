<?php

namespace App\Client\Localizations\Localizations\Create;

trait GeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @return array
     */
    protected array $generators = ['localization_code', 'language_code'];

    /**
     * get dont overwrite generator for client
     *
     * @return array
     */
    protected array $dontOverWriteGenerators = ['localization_code', 'language_code'];

    /**
     * generates localization_code for client
     *
     * @return int
     */
    public function localizationCodeGenerator(): int
    {
        return generateHash();
    }

    /**
     * generates language_code for client
     *
     * @return int
     */
    public function languageCodeGenerator(): int
    {
        return appLanguageCode();
    }
}
