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
class ClientBodyProcess
{
    use ClientVariableTraitProcess;

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
        $this->valid();
    }

    /**
     * make process valid for client
     *
     * @return void
     */
    private function valid() : void
    {
        foreach ($this->data as $key => $value){

            if(is_array($value)){

                $this->client->setData($value = $this->variableProcess($value));

                tap(
                    Validator::make($value,array_merge(
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
            else{
                Exception::clientFormatException();
            }
        }
    }
}
