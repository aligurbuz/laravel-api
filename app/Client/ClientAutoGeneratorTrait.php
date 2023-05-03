<?php

declare(strict_types=1);

namespace App\Client;

use App\Exceptions\Exception;
use App\Facades\Authenticate\ApiKey;
use App\Facades\Authenticate\Authenticate;
use App\Facades\Role\Role;
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
        'stopRepositoryHitter',
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
        'stopRepositoryHitter',
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

        return $callback();
    }

    /**
     * get user_id generator for client
     *
     * @return mixed
     */
    public function customerCodeAutoGenerator(): mixed
    {
        if(isPost() && $this->getModelName()==='Customer'){
            return generateHash();
        }

        if(!ApiKey::isAdmin()){
            return $this->ensureColumnExists('customer_code', function () {
                return customerCode();
            });
        }

        return null;
    }

    /**
     * get created_by generator for client
     *
     * @return mixed
     */
    public function createdByAutoGenerator(): mixed
    {
        if (isPost()) {
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
        if (isPut()) {
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
            isPut()
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
            isPut()
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
     * @return void
     */
    public function clientFileProcessAutoGenerator(): void
    {
        if (count(request()->allFiles())) {
            $files = Factory::storage(['client' => $this])->put();

            foreach ($files as $key => $value) {
                $this->set($key, $value);
            }
        }
    }

    /**
     * code process for client
     *
     * @param array $data
     * @return void
     */
    public function codeProcessAutoGenerator(array $data = []): void
    {
        $data = count($data) ? $data : (array)$this->get();

        foreach ($data as $key => $value) {
            if (httpMethod() === 'post' && getTableCode($this->getModel()) === $key) {
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
                        Factory::code([$key => $value])->throwExceptionIfDoesntExist(!Role::isAdmin());
                    }
                }
            }
        }
    }

    /**
     * The first records with the is_default key will set is_default to true.
     *
     * @return void
     */
    public function isDefaultFirstRegisterAutoGenerator(): void
    {
        $this->ensureColumnExists('is_default', function () {
            $customerData = $this->repository()->getRepository();

            if (!count($customerData)) {
                AppContainer::setWithTerminating('noIsDefaultUpdate', true);
                $this->set('is_default', true);
            }
        });
    }

    /**
     * stopper repository hitter for client side
     *
     * @return void
     */
    public function stopRepositoryHitterAutoGenerator(): void
    {
        if (!isGet() && isRepository($this->repository())) {
            foreach ($this->repository()->getHitter() as $hitter) {
                if ($this->has($hitter)) {
                    Exception::customException('hitter', ['key' => $hitter, 'method' => httpMethod()]);
                }
            }
        }
    }
}
