<?php

declare(strict_types=1);

namespace App\Factory\Code;

use App\Repositories\Repository;
use Illuminate\Support\Str;

/**
 * Class CodeManager
 * @package App\Factory\Code
 */
abstract class CodeManager
{
    /**
     * checks if the repository is valid
     *
     * @param callable $callback
     * @return mixed
     */
    public function isValidRepository(callable $callback): mixed
    {
        $repository = Repository::{$this->getRepositoryName()}();

        if (false !== $repository) {
            return call_user_func($callback, $repository);
        }

        return null;
    }

    /**
     * get repository name for factory
     *
     * @return string|null
     */
    public function getRepositoryName(): ?string
    {
        $code = $this->getCodeIdentifier();

        if (isset($code['codeName'])) {
            return Str::camel(str_replace('_code', '', $code['codeName']));
        }

        return null;
    }

    /**
     * get code identifier for factory
     *
     * @return array
     */
    public function getCodeIdentifier(): array
    {
        $list = [];

        foreach ($this->binds as $codeName => $value) {
            $list['codeName'] = Str::snake($codeName);
            $list['value'] = intval($value);
        }

        return $list;
    }
}
