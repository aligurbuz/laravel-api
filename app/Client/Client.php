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
}
