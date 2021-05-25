<?php

declare(strict_types=1);

namespace App\Packages\Client;

use App\Services\AppContainer;
use App\Services\Db;
use App\Exceptions\Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as ValidatorContract;

/**
 * Class ClientBodyProcess
 * @package App\Packages\Client
 */
class ClientBodyProcess extends ClientVariableProcess
{
    /**
     * @var null|object
     */
    protected ?object $client;

    /**
     * @var array
     */
    protected array $data = [];

    /**
     * ClientBodyProcess constructor.
     * @param object $client
     */
    public function __construct(object $client)
    {
        $this->client = $client;
        $data = $this->client->getData();
        $this->data = $data['body'] ?? [];

        if(count($this->data)=='0'){
            Exception::clientEmptyException();
        }

        $this->make();
    }

    /**
     * make process for client
     *
     * @return void
     */
    private function make() : void
    {
        $this->validator();
    }

    /**
     * @param array $data
     * @return void
     */
    private function capsuleProcess(array $data = []) : void
    {
        $capsule = $this->client->getCapsule();

        foreach ($data as $key => $value){
            if(!in_array($key,$capsule)){
                Exception::clientCapsuleException('',['key' => $key]);
            }
        }
    }

    /**
     * make process valid for client
     *
     * @return void
     */
    private function validator() : void
    {
        foreach ($this->data as $key => $value){

            if(is_array($value)){

                if(count($this->data)> $arrayLimiter = $this->client->getArrayLimiter()){
                    Exception::clientArrayLimiterException('client data must have a maximum of '.$arrayLimiter.' record.');
                }

                $this->client->setDataStream($value);

                $this->typeValidator($value);

                $generatorProcess = array_merge($this->generatorProcess($value),$this->autoGeneratorProcess($value));
                $this->variableProcess($generatorProcess);
                $value = $this->client->getDataStream();
                $this->client->setBodyData($key,$value);

                $this->capsuleProcess($value);

                $this->makeValidator($value);

            }
            else{
                Exception::clientFormatException();
            }
        }
    }

    /**
     * get type validator
     *
     * @param array $data
     */
    private function typeValidator(array $data = [])
    {
        $table = $this->client->getTable();

        if(!is_null($table)){

            $list = [];
            $types = Db::types($table);
            $customRules = $this->client->getCustomRule();

            foreach ($data as $key => $value){
                if(isset($types[$key])){
                    $type = $types[$key];

                    if(isset($customRules[$type])){
                        $list[$key] = $customRules[$type];
                    }
                    else{
                        $list[$key] = $types[$key];
                    }

                }
            }

            $this->makeValidator($data,$list,$types);
        }
    }

    /**
     * make validator
     *
     * @param array $data
     * @param array $validators
     * @param array $types
     */
    private function makeValidator(array $data = [],array $validators = [],array $types = [])
    {
        tap(
            Validator::make($data,$this->clientRuleProcess($validators)),
            function(ValidatorContract $validator) use($types){
                $message = $validator->getMessageBag();
                static::errorContainer($this->client->getRule(),'requiredFields');

                if(count($message->getMessages())){

                    if(count($types)){
                        $key = ($message->keys())[0] ?? null;
                        static::errorContainer($key,'errorInput');
                        if(isset($types[$key])){
                            $typeMessage = trans('validation.'.$key,['attribute' => $key]);

                            if($typeMessage==='validation.'.$key){
                                static::errorContainer($types[$key],'errorInput');
                                $typeMessage = trans('validation.'.$types[$key],['attribute' => $key]);
                            }
                        }
                    }

                    foreach ($message->getMessages() as $inputKey => $inputValue){
                        static::errorContainer($inputKey,'errorInput');
                    }

                    Exception::validationException(isset($typeMessage) ? $typeMessage : $message->first());
                }
            });
    }

    /**
     * get client rule process
     *
     * @param array $validator
     * @return array
     */
    private function clientRuleProcess(array $validator = []) : array
    {
        $autoRules = $this->client->getAutoRule();
        $rules = count($validator) ? $validator : $this->client->getRule();

        $list = [];

        foreach ($rules as $key => $rule){
            if(isset($autoRules[$key])){
                $list[$key] = $rule.'|'.$autoRules[$key];
            }
            else{
                $list[$key] = $rule;
            }
        }

        return $list;
    }

    /**
     * set error input to appContainer
     *
     * @param mixed $data
     * @param null|string $key
     * @return void
     */
    private static function errorContainer(mixed $data, ?string $key) : void
    {
        if(AppContainer::has($key)){
            AppContainer::terminate('$key');
        }

        AppContainer::set($key,$data);
    }
}
