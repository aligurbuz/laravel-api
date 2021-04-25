<?php

declare(strict_types=1);

namespace App\Packages\Client;

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

                $this->capsuleProcess($value);
                $this->typeValidator($value);

                $generatorProcess = array_merge($this->generatorProcess($value),$this->autoGeneratorProcess($value));
                $this->client->setBodyData($key,$value = $this->variableProcess($generatorProcess));

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
     * @param array $validator
     * @param array $types
     */
    private function makeValidator(array $data = [],array $validator = [],array $types = [])
    {
        tap(
            Validator::make($data,array_merge(
                $this->client->getAutoRule(),
                count($validator) ? $validator : $this->client->getRule()
            )),
            function(ValidatorContract $validator) use($types){
                $message = $validator->getMessageBag();

                if(count($message->getMessages())){

                    if(count($types)){
                        $key = ($message->keys())[0] ?? null;
                        if(isset($types[$key])){
                            $typeMessage = trans('validation.custom.'.$types[$key],['key' => $key]);
                        }
                    }

                    Exception::validationException(isset($typeMessage) ? $typeMessage : $message->first());
                }
            });
    }
}
