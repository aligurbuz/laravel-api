<?php

declare(strict_types=1);

namespace App\Factory\Code;

use App\Factory\Code\Interfaces\CodeInterface;

/**
 * Class Code
 * @package App\Factory\Code
 */
class Code extends CodeManager implements CodeInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * Code constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
    }

    /**
     * throws exception if does not exits code for the specified model
     *
     * @return mixed
     */
    public function throwExceptionIfDoesntExist(): mixed
    {
        return $this->isValidRepository(function ($repository) {

            // it determines the code and
            // code value according to the binds value.
            $code = $this->getCodeIdentifier();

            // we detect the existence of the code value using the repository.
            // if false, an exception will be thrown.
            if (isset($code['codeName'], $code['value']) && !$repository->exists($code['codeName'], $code['value'])) {
                return inValidCodeException($code['codeName'], $code['value']);
            }

            return null;
        });
    }
}
