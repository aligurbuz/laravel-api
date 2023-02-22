<?php

declare(strict_types=1);

namespace App\Client;

use App\Packages\Client\ClientManager;
use App\Repositories\Repository;
use App\Services\AppContainer;
use App\Services\Client as ClientFacade;
use App\Services\Db;
use Illuminate\Support\Str;

/**
 * Class Client
 * @property array $rule
 * @property array $capsule
 * @package App\Client
 */
class Client extends ClientManager
{
    use ClientSetRuleTrait, ClientSupport, ClientAction;

    /**
     * @var array
     */
    protected array $paramValidatorValues = ['filter'];

    /**
     * @var array|string[]
     */
    protected array $customRules = [
        'double' => ['regex:/^[0-9]+(\\.[0-9]+)?$/i'],
        'timestamp' => ['date_format:Y-m-d H:i:s'],
        'time' => ['date_format:H:i'],
        'atLeastUpperLowerNumber' => ['regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/']
    ];

    /**
     * @var array
     */
    protected array $autoRule = [
        'email' => 'email:rfc,dns',
        'status' => ['boolean'],
        'is_deleted' => ['boolean'],
        'is_default' => ['boolean'],
    ];

    /**
     * Client constructor.
     * @param array $data
     * @param bool $handler
     */
    public function __construct(array $data = [], bool $handler = true)
    {
        if ($handler) {
            parent::__construct($data);
            $this->preHandlers();
            $this->modelRequiredFields();
            $this->capsule();
            $this->addRule();
        }

        AppContainer::setWithTerminating('clientInstance', $this);
    }

    /**
     * You can specify your methods to run before the client starts in the preHandler property value.
     *
     * @return void
     */
    public function preHandlers(): void
    {
        if (property_exists($this, 'preHandlers') && is_array($this->preHandlers)) {
            foreach ($this->preHandlers as $preHandler) {
                if (method_exists($this, $method = 'pre' . ucfirst($preHandler) . 'Handler')) {
                    $this->$method(ClientFacade::data());
                }
            }
        }
    }

    /**
     * get model required fields
     *
     * @param bool $withoutMethod
     * @return void
     */
    public function modelRequiredFields(bool $withoutMethod = false): void
    {
        $maxLength = Db::columnMaxLength($this->getTable());

        if ($withoutMethod===true || request()->method() === 'POST') {
            $entities = Db::entities($this->getTable());
            $requiredColumns = $entities['required_columns'] ?? [];

            foreach ($requiredColumns as $requiredColumn) {
                (isset($maxLength[$requiredColumn]))
                    ? $this->setRule($requiredColumn, 'required|max:' . $maxLength[$requiredColumn])
                    : $this->setRule($requiredColumn, 'required');
            }
        }

        if (request()->method() !== 'GET') {
            foreach ($maxLength as $maxLengthColumn => $maxLengthValue) {
                $this->setRule($maxLengthColumn, 'max:' . $maxLengthValue, false);
            }
        }
    }

    /**
     * get capsule
     *
     * @return null|string
     */
    public function getTable(): null|string
    {
        $model = $this->getModel();

        if (class_exists($model)) {
            return (new $model)->getTable();
        }

        return null;
    }

    /**
     * get capsule
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model[0] ?? 'no-model';
    }

    /**
     * get rule for client
     *
     * @param $key
     * @param $value
     * @param bool $isset
     * @return void
     */
    public function setRule($key, $value, bool $isset = true): void
    {
        if ($isset && isset($this->rule[$key])) {
            $this->rule[$key] = $value . '|' . $this->rule[$key];
        } elseif (!isset($this->rule[$key])) {
            $this->rule[$key] = $value;
        }
    }

    /**
     * get capsule data
     *
     * @return void
     */
    public function capsule(): void
    {
        if (
            property_exists($this, 'model')
            && isset($this->model[0])
        ) {
            AppContainer::setWithTerminating('clientCapsule', (is_array($this->capsule) ? $this->capsule : []));
            $this->capsule = array_merge($this->columnsForModel(), $this->capsule);

            if ($this->requestMethod == 'GET') {
                $this->capsule = array_merge($this->capsule, config('app.allowedClientKeys'));

                if (count($this->repository()->getCollects())) {
                    $this->capsule = array_merge($this->capsule, ['collect']);
                }
            }
        }
    }

    /**
     * get columns for model
     *
     * @return array
     */
    public function columnsForModel(): array
    {
        return Db::columns($this->getTable());
    }

    /**
     * get repository for client class model
     *
     * @param bool $justName
     * @return mixed
     */
    public function repository(bool $justName = false): mixed
    {
        $camelCaseModelName = Str::camel($this->getModelName());

        if ($justName) return $camelCaseModelName;

        return Repository::$camelCaseModelName();
    }

    /**
     * get capsule
     *
     * @return string
     */
    public function getModelName(): string
    {
        $model = $this->getModel();
        $modelSplit = explode('\\', $model);

        return end($modelSplit);
    }

    /**
     * add rule for client
     *
     * @return void
     */
    public function addRule(): void
    {
        $this->setRuleProcess();
    }

    /**
     * get custom rules for client
     *
     * @return array
     */
    public function getCustomRules(): array
    {
        return $this->customRules;
    }

    /**
     * get rule for client
     *
     * @return array
     */
    public function getRule(): array
    {
        return $this->rule;
    }

    /**
     * get all rule for client
     *
     * @return array
     */
    public function getAllRule(): array
    {
        $this->modelRequiredFields(true);

        return $this->rule;
    }

    /**
     * get required values for client
     *
     * @return array
     */
    public function getRequireds() : array
    {
        $rules = $this->getAllRule();

        $list = [];

        foreach ($rules as $key => $rule){
            if(is_string($rule) && Str::contains($rule,'required')){
                $list[] = $key;
            }

            if(is_array($rule) && in_array('required',$rule,true)){
                $list[] = $key;
            }
        }

        return $list;
    }

    /**
     * get array rule for client
     *
     * @return array
     */
    public function getArrayRule(): array
    {
        return property_exists($this, 'arrayRule') ? $this->arrayRule : [];
    }

    /**
     * get array capsule comments for client
     *
     * @return array
     */
    public function getCapsuleComments(): array
    {
        return property_exists($this, 'capsuleComments') ? $this->capsuleComments : [];
    }

    /**
     * get custom rule for client
     *
     * @return array
     */
    public function getCustomRule(): array
    {
        return $this->customRules;
    }

    /**
     * get auto rule for client
     *
     * @return array
     */
    public function getAutoRule(): array
    {
        return $this->autoRule;
    }

    /**
     * set auto rule for client
     *
     * @param $key
     * @param $value
     * @return void
     */
    public function setAutoRule($key, $value): void
    {
        if (!isset($this->autoRule[$key])) {
            $this->autoRule[$key] = $value;
        }
    }

    /**
     * set property for client
     *
     * @param $key
     * @param $value
     */
    public function setProperty($key, $value)
    {
        $key = Str::camel($key);
        $this->{$key} = $value;
    }

    /**
     * call method for client
     *
     * @param $key
     * @return mixed
     */
    public function callMethod($key): mixed
    {
        $key = Str::camel($key);

        if (method_exists($this, $key)) {
            return $this->{$key}();
        }

        return false;
    }

    /**
     * get generators for client
     *
     * @return array
     */
    public function generators(): array
    {
        return $this->{__FUNCTION__};
    }

    /**
     * get dontOverWriteGenerators for client
     *
     * @return array
     */
    public function dontOverWriteGenerators(): array
    {
        return $this->{__FUNCTION__};
    }

    /**
     * get generators for client
     *
     * @return array
     */
    public function autoGenerators(): array
    {
        return $this->{__FUNCTION__};
    }

    /**
     * get dontOverWriteGenerators for client
     *
     * @return array
     */
    public function dontOverWriteAutoGenerators(): array
    {
        return $this->{__FUNCTION__};
    }

    /**
     * get array limiter
     *
     * @return int
     */
    public function getArrayLimiter(): int
    {
        return 1;
    }

    /**
     * get param validator values
     *
     * @return array
     */
    public function getParamValidatorValues(): array
    {
        return $this->paramValidatorValues;
    }

    /**
     * get capsule
     *
     * @return array
     */
    public function getCapsule(): array
    {
        return $this->capsule;
    }

    /**
     * get client capsule descriptions for standard client data
     *
     * @return array
     */
    public function getCapsuleDescriptions(): array
    {
        return (property_exists($this, 'capsuleDescriptions') && is_array($this->capsuleDescriptions))
            ? $this->capsuleDescriptions : [];
    }

    /**
     * get client capsule for standard client data
     *
     * @return array
     */
    public function getClientCapsule(): array
    {
        return AppContainer::get('clientCapsule', []);
    }

    /**
     * set input for client
     *
     * @param null|string $key
     * @return mixed
     */
    public function get(?string $key = null): mixed
    {
        $streamData = $this->getClientDataStreams();

        return $streamData[$key] ?? $streamData;
    }

    /**
     * get client data stream for client
     *
     * @return array
     */
    public function getClientDataStreams(): array
    {
        return AppContainer::get('clientDataStreams', []);
    }

    /**
     * @param $column
     * @param callable $callback
     * @return mixed
     */
    public function ensureColumnExists($column, callable $callback): mixed
    {
        if (Db::ensureColumnExists($this->getTable(), $column)) {
            return call_user_func($callback);
        }

        return null;
    }

    /**
     * set input for client
     *
     * @param $key
     * @param $value
     */
    public function set($key, $value): void
    {
        $this->putDataStream($key, $value);
    }

    /**
     * set input for client
     *
     * @param $key
     * @param $value
     * @return $this
     */
    public function register($key, $value): Client
    {
        $this->setRegister($key, $value);

        return $this;
    }

    /**
     * check if the key is valid for client
     *
     * @param null|string $key
     * @return bool
     */
    public function has(?string $key = null): bool
    {
        $streamData = $this->getClientDataStreams();

        return (isset($streamData[$key]));
    }
}
