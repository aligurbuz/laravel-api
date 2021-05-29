<?php

namespace App\Client;

use App\Factory\Factory;
use App\Facades\Authenticate\Authenticate;
use App\Services\Date;

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
        'deleted_by',
        'deleted_at',
        'clientFileProcess',
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
        'deleted_by',
        'deleted_at',
        'clientFileProcess',
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

    /**
     * get deleted_by generator for client
     *
     * @return mixed
     */
    public function deletedByAutoGenerator(): mixed
    {
        if(request()->method()=='PUT' && $this->has('is_deleted') && $this->get('is_deleted')=='1'){
            return $this->ensureColumnExists('deleted_by',function(){
                return Authenticate::id();
            });
        }

        return null;
    }

    /**
     * get deleted_by generator for client
     *
     * @return mixed
     */
    public function deletedAtAutoGenerator(): mixed
    {
        if(request()->method()=='PUT' && $this->has('is_deleted') && $this->get('is_deleted')=='1'){
            return $this->ensureColumnExists('deleted_at',function(){
                return Date::now()->toDayDateTimeString();
            });
        }

        return null;
    }

    /**
     * file process for client
     *
     * @return mixed
     */
    public function clientFileProcessAutoGenerator(): mixed
    {
        $files = Factory::storage(['client' => $this])->put();

        foreach ($files as $key => $value){
            $this->set($key,$value);
        }

        return null;
    }
}
