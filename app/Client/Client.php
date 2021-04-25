<?php

namespace App\Client;

use App\Packages\Client\ClientManager;
use App\Services\Db;

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
     * @var array|string[]
     */
    protected array $customRules = [
        'double' => ['regex:/^[0-9]+(\\.[0-9]+)?$/i'],
    ];

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
        $this->capsule();
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
     * get custom rule for client
     *
     * @return array
     */
    public function getCustomRule() : array
    {
        return $this->customRules;
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

    /**
     * get capsule
     *
     * @return array
     */
    public function getCapsule() : array
    {
        return $this->capsule;
    }

    /**
     * get capsule
     *
     * @return string
     */
    public function getModel() : string
    {
        return $this->model[0] ?? 'no-model';
    }

    /**
     * get capsule
     *
     * @return null|string
     */
    public function getTable() : null|string
    {
        $model = $this->getModel();

        if(class_exists($model)){
            return (new $model)->getTable();
        }

        return null;
    }

    /**
     * get capsule data
     *
     * @return void
     */
    public function capsule() : void
    {
        if(
            property_exists($this,'model')
            && is_array($this->model)
            && isset($this->model[0])
        ){
            $this->capsule = array_merge(Db::columns($this->getTable()),$this->capsule);
        }
    }
}
