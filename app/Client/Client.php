<?php

declare(strict_types=1);

namespace App\Client;

use App\Services\Db;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\Pure;
use App\Repositories\Repository;
use App\Packages\Client\ClientManager;

/**
 * Class Client
 * @package App\Client
 */
class Client extends ClientManager
{
    use ClientSetRuleTrait,ClientSupport;

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
        'is_default'    => ['regex:/^0$|^1$/i'],
    ];

    /**
     * Client constructor.
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        parent::__construct($data);
        $this->modelRequiredFields();
        $this->capsule();
        $this->addRule();
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
     * get repository for client class model
     *
     * @return mixed
     */
    public function repository(): mixed
    {
        $camelCaseModelName = Str::camel($this->getModelName());
        return Repository::$camelCaseModelName();
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
     * @param bool $isset
     * @return void
     */
    public function setRule($key, $value, bool $isset = true) : void
    {
        if($isset && isset($this->rule[$key])){
            $this->rule[$key] = $value.'|'.$this->rule[$key];
        }
        elseif(!isset($this->rule[$key])){
            $this->rule[$key] = $value;
        }
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
        $key = Str::camel($key);
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
        $key = Str::camel($key);

        if(method_exists($this,$key)){
            return $this->{$key}();
        }

        return false;
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
     * @return string
     */
    public function getModelName() : string
    {
        $model = $this->getModel();
        $modelSplit = explode('\\',$model);

        return end($modelSplit);
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

            if($this->requestMethod=='GET'){
                $this->capsule = array_merge($this->capsule,[
                    'range',
                    'filter',
                    'select',
                    'with',
                    'append',
                    'orderBy',
                    'withRange',
                    'has',
                    'doesntHave'
                ]);
            }
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
        if(Db::ensureColumnExists($this->getTable(),$column)){
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
    #[Pure] public function get(?string $key = null) : mixed
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
    #[Pure] public function has(?string $key = null) : bool
    {
        $streamData = $this->getDataStream();

        return (isset($streamData[$key]));
    }

    /**
     * get model required fields
     *
     * @return void
     */
    public function modelRequiredFields() : void
    {
        $maxLength = Db::columnMaxLength($this->getTable());

        if(request()->method()==='POST'){
            $entities = Db::entities($this->getTable());
            $requiredColumns = $entities['required_columns'] ?? [];

            foreach ($requiredColumns as $requiredColumn){
                (isset($maxLength[$requiredColumn]))
                    ? $this->setRule($requiredColumn,'required|max:'.$maxLength[$requiredColumn])
                    : $this->setRule($requiredColumn,'required');
            }
        }

        if(request()->method()!=='GET'){
            foreach ($maxLength as $maxLengthColumn => $maxLengthValue){
                $this->setRule($maxLengthColumn,'max:'.$maxLengthValue,false);
            }
        }
    }
}
