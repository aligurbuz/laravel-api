<?php

declare(strict_types=1);

namespace App\Http\Controllers;

class GlobalController extends ApiController
{
    /**
     * Controller method that handles global requests.
     *
     * @return array
     */
    public function handle() : array
    {
        $body = request()->request->all();
        request()->setMethod('GET');

        $this->resetQueryAll();

        request()->query->set('userClient',$body['userClient']);

        return ['user' => [app()->call('App\Http\Controllers\User\UserController@get')]];
    }

    /**
     * reset query all from client data
     *
     * @return void
     */
    private function resetQueryAll()
    {
        foreach (request()->query->all() as $key => $value){
            request()->query->remove($key);
        }
    }
}
