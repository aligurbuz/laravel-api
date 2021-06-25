<?php

declare(strict_types=1);

namespace App\Packages\Client;

use App\Exceptions\Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as ValidatorContract;

/**
 * Class ClientBodyProcess
 * @package App\Packages\Client
 */
class ClientParamProcess extends ClientVariableProcess
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
        $this->data = $data['params'] ?? [];
        $this->checkModelKeyWithoutFilter();
        $this->paramValidatorValueProcess();
        $this->capsuleProcess();
        $this->make();
    }

    /**
     * check model key without filter
     *
     * @return void
     */
    private function checkModelKeyWithoutFilter() : void
    {
        if($this->client->requestMethod()=='GET'){
            foreach ($this->data as $key => $value){
                if(in_array($key,$this->client->columnsForModel(),true)){
                    Exception::clientCapsuleException('', ['key' => $key]);
                    return;
                }
            }
        }
    }

    /**
     * get param validator value process
     *
     * @return void
     */
    private function paramValidatorValueProcess() : void
    {
        foreach ($this->client->getParamValidatorValues() as $paramValidatorValue){
            if(isset($this->data[$paramValidatorValue]) && is_array($this->data[$paramValidatorValue])){
                foreach ($this->data[$paramValidatorValue] as $paramKey => $paramValue){
                    $this->data[$paramKey] = $paramValue;
                }
                unset($this->data[$paramValidatorValue]);
            }
        }
    }

    /**
     * capsule process for client param process
     *
     * @return void
     */
    private function capsuleProcess() : void
    {
        $capsule = $this->client->getCapsule();

        foreach ($this->data as $key => $value){
            if(!in_array($key,$capsule)){
                Exception::clientCapsuleException('',['key' => $key]);
            }
        }
    }

    /**
     * make process for client
     *
     * @return void
     */
    private function make() : void
    {
        $this->valid();
    }

    /**
     * make process valid for client
     *
     * @return void
     */
    private function valid() : void
    {
        tap(
            Validator::make($this->data,array_merge(
                $this->client->getAutoRule(),
                $this->client->getRule()
            )),
            function(ValidatorContract $validator){
                $message = $validator->getMessageBag();

                if(count($message->getMessages())){
                    Exception::validationException($message->first());
                }
            });
    }
}
