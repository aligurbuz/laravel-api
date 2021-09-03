<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class GlobalController extends ApiController
{
    /**
     * Controller method that handles global requests.
     *
     * @return array
     */
    public function handle() : array
    {
        $services = File::get(database_path('columns').''.DIRECTORY_SEPARATOR.'service.json');
        $serviceList = json_decode($services,true);
        $body = request()->request->all();
        request()->setMethod('GET');
        $this->resetQueryAll();

        $results = [];

        foreach ($body as $service => $params){
            $service = ucfirst($service);
            if(isset($serviceList[$service])){
                $serviceData = $serviceList[$service];
                $controller = 'App\Http\Controllers\\'.$serviceData['dir'].'\\'.$serviceData['controller'].'Controller';
                foreach ($params as $key => $value){
                    request()->query->set($key,$value);
                }

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
