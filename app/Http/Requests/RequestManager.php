<?php

namespace App\Http\Requests;

use App\Exceptions\Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Validation\Validator as ValidatorContract;

class RequestManager
{
    /**
     * RequestManager constructor.
     */
    public function __construct()
    {
        $this->mutator();
    }

    /**
     * get mutator for request
     *
     * @return void
     */
    public function mutator()
    {
        //
    }

    /**
     * handle for request validation
     *
     * @param array $data
     * @param null $request
     * @param bool $filter
     */
    public function handle($data = [],$request = null,$filter = true)
    {
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

        $requestMake = count($request) ? $request : request()->all();

        tap(
            Validator::make($requestMake,array_merge(
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
