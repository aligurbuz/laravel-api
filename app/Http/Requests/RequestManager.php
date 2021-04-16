<?php

namespace App\Http\Requests;

use App\Exceptions\Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as ValidatorContract;

class RequestManager
{
    /**
     * @var int
     */
    protected int $multipleArrayLimit = 20;

    /**
     * handle for request validation
     *
     * @param array $data
     * @param null $request
     * @param bool $filter
     */
    public function handle($data = [],$request = null,$filter = true)
    {
        $method = request()->method();

        if($filter){
            $request = $this->filter();

            if(count($request)){
                $this->handle(
                    $data,
                    $request,
                    false
                );
            }
        }

        $requestMake = count($request) ? $request : request()->query->all();
        $this->makeValidation($requestMake,(($method=='GET') ? $data : []));

        if($method!=='GET'){
            $requestMake = count($request) ? $request : request()->request->all();
            $this->makeValidation($requestMake,$data);
        }
    }

    /**
     * make validation
     *
     * @param array $maker
     * @param array $data
     */
    private function makeValidation(array $maker = [], array $data = [])
    {
        tap(
            Validator::make($maker,array_merge(
                config('request'),
                $data
            )),
            function(ValidatorContract $validator){
                $message = $validator->getMessageBag();

                if(count($message->getMessages())){
                    Exception::validationException($message->first());
                }
            });
    }

    /**
     * filter process for request
     *
     * @return array
     */
    private function filter(): array
    {
        $filter = request()->query->all('filter');

        $keys = [];

        if(is_array($filter)){
            foreach ($filter as $key => $item){
                $keys[$key] = $item;
            }
        }

        return $keys;
    }
}
