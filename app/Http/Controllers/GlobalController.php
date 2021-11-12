<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Api\ApiController;

class GlobalController extends ApiController
{
    /**
     * Controller method that handles global requests.
     *
     * @return array
     */
    public function handle() : array
    {
        // we are pulling the existing route paths in the service.json file.
        // and we convert this json file to array.
        $services       = File::get(database_path('columns').''.DIRECTORY_SEPARATOR.'service.json');
        $serviceList    = json_decode($services,true);

        //we obtain the client data in the normal way.
        $body = request()->request->all();

        // the global route normally includes the post method.
        // but we have to use the GET method for all select database operations.
        // and first we reset the existing get data.
        request()->setMethod('GET');
        $this->resetQueryAll();

        $results = [];

        foreach ($body as $service => $params){
            $service = ucfirst($service);

            if(isset($serviceList[$service])){
                $serviceData = $serviceList[$service];
                $controller = 'App\Http\Controllers\Api\\'.$serviceData['dir'].'\\'.$serviceData['controller'].'Controller';

                foreach ($params as $key => $value){
                    request()->query->set($key,$value);
                }

                // we are calling the controller get methods with
                // the call method of the app object that exists in the laravel framework.
                $results[lcfirst($service)] = [app()->call($controller.'@get')];
                $this->resetQueryAll();
            }
        }

        return $results;
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
