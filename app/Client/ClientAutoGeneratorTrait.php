<?php

declare(strict_types=1);

namespace App\Client;

use App\Services\Date;
use App\Factory\Factory;
use App\Facades\Authenticate\Authenticate;

/**
 * Trait ClientAutoGeneratorTrait
 * @package App\Client
 */
trait ClientAutoGeneratorTrait
{
    /**
     * get auto generator for client
     *
     * @var array
     */
    protected array $autoGenerators = [
        'user_code',
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
        'user_code',
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
    public function userCodeAutoGenerator(): mixed
    {
        return $this->ensureColumnExists('user_code',function(){
           return Authenticate::code();
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
                return Authenticate::code();
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
                return Authenticate::code();
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
        if(
            request()->method()=='PUT'
            && $this->has('is_deleted')
            && $this->get('is_deleted')=='1')
        {
            return $this->ensureColumnExists('deleted_by',function(){
                return Authenticate::code();
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
        if(
            request()->method()=='PUT'
            && $this->has('is_deleted')
            && $this->get('is_deleted')=='1')
        {
            return $this->ensureColumnExists('deleted_at',function(){
                return Date::now()->toDateTimeString();
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
