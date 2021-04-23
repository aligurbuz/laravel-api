<?php

namespace App\Client;

use App\Facades\Authenticate\Authenticate;
use App\Services\Db;

trait ClientAutoGeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @var array
     */
    protected array $autoGenerators = ['user_id'];

    /**
     * get dont overwrite generator for client
     *
     * @var array
     */
    protected array $dontOverWriteAutoGenerators = ['user_id'];

    /**
     * get user_id generator for client
     *
     * @return mixed
     */
    public function userIdAutoGenerator(): mixed
    {
        $entities = Db::entities($this->getModel());

        if(in_array('user_id',$entities)){
            return Authenticate::id();
        }

        return null;
    }
}
