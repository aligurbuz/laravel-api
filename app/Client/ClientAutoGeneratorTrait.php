<?php

declare(strict_types=1);

namespace App\Client;

use App\Facades\Authenticate\ApiKey;
use App\Facades\Authenticate\Authenticate;
use App\Factory\Factory;
use App\Services\AppContainer;
use App\Services\Date;

/**
 * Trait ClientAutoGeneratorTrait
 * @package App\Client
 */
trait ClientAutoGeneratorTrait
{
    use SequenceTimeGenerator;

    /**
     * get auto generator for client
     *
     * @var array
     */
    protected array $autoGenerators = [
        'sequence_time',
        'user_code',
        'customer_code',
        'created_by',
        'updated_by',
        'deleted_by',
        'deleted_at',
        'clientFileProcess',
        'codeProcess',
        'isDefaultFirstRegister',
    ];

    /**
     * get don't overwrite generator for client
     *
     * @var array
     */
    protected array $dontOverWriteAutoGenerators = [
        'sequence_time',
        'user_code',
        'customer_code',
        'created_by',
        'updated_by',
        'deleted_by',
        'deleted_at',
        'clientFileProcess',
        'codeProcess',
        'isDefaultFirstRegister',
    ];

    /**
     * get user_id generator for client
     *
     * @return mixed
     */
    public function userCodeAutoGenerator(): mixed
    {
        if ($this->getModelName() !== 'User') {
            return $this->ensureColumnExists('user_code', function () {
                return $this->getUserCodeForSuperAdmin(function () {
                    return Authenticate::code();
                });
            });
        }

        return null;
    }

    /**
     * get user code for super admin
     *
     * @param callable $callback
     * @return mixed
     */
    private function getUserCodeForSuperAdmin(callable $callback): mixed
    {
        if (ApiKey::isSuperAdmin()) {
            return $this->has('user_code') ? $this->get('user_code') : null;
        }

        return call_user_func($callback);
    }

    /**
     * get user_id generator for client
     *
     * @return mixed
     */
    public function customerCodeAutoGenerator(): mixed
    {
        return $this->ensureColumnExists('customer_code', function () {
            return customerCode();
        });
    }

    /**
     * get created_by generator for client
     *
     * @return mixed
     */
    public function createdByAutoGenerator(): mixed
    {
        if (request()->method() == 'POST') {
            return $this->ensureColumnExists('created_by', function () {
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
        if (request()->method() == 'PUT') {
            return $this->ensureColumnExists('updated_by', function () {
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
        if (
            request()->method() == 'PUT'
            && $this->has('is_deleted')
            && booleanChecks($this->get('is_deleted'))) {
            return $this->ensureColumnExists('deleted_by', function () {
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
        if (
            request()->method() == 'PUT'
            && $this->has('is_deleted')
            && booleanChecks($this->get('is_deleted'))) {
            return $this->ensureColumnExists('deleted_at', function () {
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
        if (count(request()->allFiles())) {
            $files = Factory::storage(['client' => $this])->put();

            foreach ($files as $key => $value) {
                $this->set($key, $value);
            }
        }

        return null;
    }

    /**
     * code process for client
     *
     * @param array $data
     * @return mixed
     */
    public function codeProcessAutoGenerator(array $data = []): mixed
    {
        $data = count($data) ? $data : (array)$this->get();


        foreach ($data as $key => $value) {
            if (request()->method() == 'POST' && getTableCode($this->getModel()) == $key) {
                continue;
            }

            if (is_numeric($key) && is_array($value)) {
                $this->codeProcessAutoGenerator($value);
            }

            if (preg_match('@(.*?)_code@is', $key)) {
                $model = getModelFromTableCode($key);

                if (is_object($this->repository()) && method_exists($this->repository(), 'getRecursiveMirror')) {
                    $mirror = $this->repository()->getRecursiveMirror($model, $value);

                    if (is_null($mirror)) {
                        Factory::code([$key => $value])->throwExceptionIfDoesntExist();
                    }
                }
            }
        }

        return null;
    }

    /**
     * The first records with the is_default key will set is_default to true.
     *
     * @return null
     */
    public function isDefaultFirstRegisterAutoGenerator()
    {
        $this->ensureColumnExists('is_default', function () {
            $customerData = $this->repository()->getRepository();

            if (!count($customerData)) {
                AppContainer::setWithTerminating('noIsDefaultUpdate',true);
                $this->set('is_default', true);
            }
        });

        return null;
    }
}
