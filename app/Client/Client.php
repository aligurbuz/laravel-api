<?php

namespace App\Client;

use App\Packages\Client\ClientManager;

/**
 * Class Client
 * @package App\Client
 */
class Client extends ClientManager
{
    /**
     * @var array
     */
    protected array $paramValidatorValues = ['filter'];

    /**
     * @var array
     */
    protected array $autoRule = [
        'email'         => 'email:rfc,dns',
        'status'        => ['regex:/^0$|^1$/i'],
        'is_deleted'    => ['regex:/^0$|^1$/i'],
    ];

    /**
     * Client constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->handle();
    }

    /**
     * get rule for client
     *
     * @return array
     */
    public function getRule() : array
    {
        return $this->rule;
    }

    /**
     * get auto rule for client
     *
     * @return array
     */
    public function getAutoRule() : array
    {
        return $this->autoRule;
    }

    /**
     * set property for client
     *
     * @param $key
     * @param $value
     */
    public function setProperty($key,$value)
    {
        $this->{$key} = $value;
    }

    /**
     * call method for client
     *
     * @param $key
     * @return mixed
     */
    public function callMethod($key): mixed
    {
        return $this->{$key}();
    }

    /**
     * get generators for client
     *
     * @return array
     */
    public function generators(): array
    {
        return $this->{__FUNCTION__};
    }

    /**
     * get dontOverWriteGenerators for client
     *
     * @return array
     */
    public function dontOverWriteGenerators(): array
    {
        return $this->{__FUNCTION__};
    }

    /**
     * get generators for client
     *
     * @return array
     */
    public function autoGenerators(): array
    {
        return $this->{__FUNCTION__};
    }

    /**
     * get dontOverWriteGenerators for client
     *
     * @return array
     */
    public function dontOverWriteAutoGenerators(): array
    {
        return $this->{__FUNCTION__};
    }

    /**
     * get array limiter
     *
     * @return int
     */
    public function getArrayLimiter(): int
    {
        return 1;
    }

    /**
     * get param validator values
     *
     * @return array
     */
    public function getParamValidatorValues(): array
    {
        return $this->paramValidatorValues;
    }
}
