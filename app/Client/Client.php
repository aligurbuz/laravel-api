<?php

namespace App\Client;

use App\Services\Db;
use App\Packages\Client\ClientManager;

/**
 * Class Client
 * @package App\Client
 */
class Client extends ClientManager
{
    use ClientSetRuleTrait;

    /**
     * @var array
     */
    protected array $paramValidatorValues = ['filter'];

    /**
     * @var array
     */
    protected array $inputs = [];

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
        $this->inputs = [];
        parent::__construct($data);
        $this->modelRequiredFields();
        $this->capsule();
        $this->addRule();
        $this->handle();
        $this->inputs = $this->getDataStream();
    }

    /**
     * get model required fields
     *
     * @return void
     */
    public function modelRequiredFields() : void
    {
        $entities = Db::entities($this->getTable());
        $requiredColumns = $entities['required_columns'] ?? [];

        foreach ($requiredColumns as $requiredColumn){
            $this->setRule($requiredColumn,'required');
        }
    }

    /**
     * add rule for client
     *
     * @return void
     */
    public function addRule()
    {
        $this->setRuleProcess();
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
     * get rule for client
     *
     * @param $key
     * @param $value
     * @return void
     */
    public function setRule($key,$value) : void
    {
        $this->rule[$key] = $value;
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
            $this->capsule = array_merge($this->columnsForModel(),$this->capsule);
        }
    }

    /**
     * get columns for model
     *
     * @return array
     */
    public function columnsForModel() : array
    {
        return Db::columns($this->getTable());
    }

    /**
     * @param $column
     * @param callable $callback
     * @return mixed
     */
    public function ensureColumnExists($column,callable $callback): mixed
    {
        $entities = $this->columnsForModel();

        if(in_array($column,$entities)){
            return call_user_func($callback);
        }

        return null;
    }

    /**
     * set input for client
     *
     * @param $key
     * @param $value
     */
    public function set($key,$value) : void
    {
        $this->putDataStream($key,$value);
    }

    /**
     * set input for client
     *
     * @param null|string $key
     * @return mixed
     */
    public function get($key = null) : mixed
    {
        $streamData = $this->getDataStream();

        return $streamData[$key] ?? $streamData;
    }

    /**
     * check if the key is valid for client
     *
     * @param null|string $key
     * @return bool
     */
    public function has($key = null) : bool
    {
        $streamData = $this->getDataStream();

        return (isset($streamData[$key]));
    }
}
