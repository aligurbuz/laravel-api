<?php

namespace App\Client;

use App\Facades\Authenticate\Authenticate;

trait ClientAutoGeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @var array
     */
    protected array $autoGenerators = [
        'user_id',
        'created_by',
        'updated_by',
    ];

    /**
     * get dont overwrite generator for client
     *
     * @var array
     */
    protected array $dontOverWriteAutoGenerators = [
        'user_id',
        'created_by',
        'updated_by',
    ];

    /**
     * get user_id generator for client
     *
     * @return mixed
     */
    public function userIdAutoGenerator(): mixed
    {
        return $this->ensureColumnExists('user_id',function(){
           return Authenticate::id();
        });
    }

    /**
     * get created_by generator for client
     *
     * @return mixed
     */
    public function createdByAutoGenerator(): mixed
    {
        if(request()->method()=='POST'){
            return $this->ensureColumnExists('created_by',function(){
                return Authenticate::id();
            });
        }

        return null;
    }

    /**
     * get updated_by generator for client
     *
     * @return mixed
     */
    public function updatedByAutoGenerator(): mixed
    {
        if(request()->method()=='PUT'){
            return $this->ensureColumnExists('updated_by',function(){
                return Authenticate::id();
            });
        }

        return null;
    }
}
