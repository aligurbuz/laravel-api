<?php

declare(strict_types=1);

namespace App\Client;

class ClientAction
{
    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $actionClientData = request()->query->get('action');

        if(!is_null($actionClientData) && method_exists($this,$actionClientData)){
            request()->query->add($this->{$actionClientData}($data));
        }
    }

    /**
     * get action data handler for client
     *
     * @return array
     */
    public function getAction() : array
    {
        return request()->query->all();
    }
}
