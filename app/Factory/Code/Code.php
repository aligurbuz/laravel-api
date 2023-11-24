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
     * throws exception if it does not exist code for the specified model
     *
     * @param bool $notDeleted
     * @return mixed
     */
    public function throwExceptionIfDoesntExist(bool $notDeleted = true): mixed
    {
        return $this->isValidRepository(function ($repository) use ($notDeleted) {

            // it determines the code and
            // code value according to the binds value.
            $code = $this->getCodeIdentifier();

            // will apply the data control according to the deleted or not deleted.
            $repositoryApplying = $notDeleted ? $repository->notDeleted() : $repository;

            // we detect the existence of the code value using the repository.
            // if false, an exception will be thrown.
            if (isset($code['codeName'], $code['value']) && !$repositoryApplying->exists($code['codeName'], $code['value'])) {
                return inValidCodeException($code['codeName'], $code['value']);
            }

            return null;
        });
    }
}
