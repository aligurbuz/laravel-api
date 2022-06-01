<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Exceptions\Exception as ExceptionFacade;
use App\Services\AppContainer;
use Exception;

/**
 * Trait CreateRepository
 * @package App\Repositories\Executors
 */
trait CreateRepository
{
    /**
     * @var array
     */
    protected array $addPostQueryResults = [];

    /**
     * get create event dispatcher for repository
     *
     * @param array $data
     * @param int $clientDataKey
     */
    public function createEventDispatcher(array $data = [], int $clientDataKey = 0): void
    {
        $this->createLocalization($data);
        $this->deleteCache();
        $this->addPostQueryDispatcher($data, $clientDataKey);
    }

    /**
     * add post query dispatcher for repository
     *
     * @param array $data
     * @param int $clientDataKey
     * @return void
     */
    public function addPostQueryDispatcher(array $data = [], int $clientDataKey = 0): void
    {
        if (count($this->getAddPostQueries())) {
            foreach ($this->getAddPostQueries() as $key => $cr) {
                $keyExplode = explode('|', $key);
                $key = $keyExplode[0];
                $createStatus = !((isset($keyExplode[1]) && $keyExplode[1] == 'false'));

                if (isset($data[$key])) {
                    $crData = [];

                    if (!isset($data[$key][0])) {
                        $data[$key] = [$data[$key]];
                    }

                    foreach ($data[$key] as $crKey => $crValues) {
                        $crData[$crKey] = $crValues;
                        $crData[$crKey][getTableCode($this->getModel())] = $data[getTableCode($this->getModel())];
                    }

                    try {
                        cR($cr, $crData, null, true);
                    } catch (Exception $exception) {
                        ExceptionFacade::customException($exception->getMessage() . ' (' . trans('exception.crKey', ['key' => $key]) . ')');
                    }

                    $this->addPostQueryResults[$clientDataKey][$key] = $createStatus ? AppContainer::get('crRepositoryInstance')->create() : $data[$key];
                }
            }
        }
    }

    /**
     * create data for user model
     *
     * @param array $data
     * @return array|object
     */
    public function createHandler(array $data = []): array|object
    {
        $list = [];
        $clientData = $this->getClientData($data);

        try {
            foreach ($clientData as $clientDataKey => $value) {

                if (method_exists($this, 'eventFireBeforeCreate')) {
                    AppContainer::setWithTerminating('eventFire',true);
                    $this->eventFireBeforeCreate($value);
                }

                $result = $this->createModel($value);
                $arrayResults = $result->toArray();

                $this->createEventDispatcher($value, $clientDataKey);

                if (count($this->addPostQueryResults)) {
                    $arrayResults = array_merge($arrayResults, $this->addPostQueryResults[$clientDataKey]);
                }

                if (method_exists($this, 'eventFireAfterCreate')) {
                    AppContainer::setWithTerminating('eventFire',true);
                    $this->eventFireAfterCreate($arrayResults, $value);
                }

                $list[] = $arrayResults;

            }

            return $list;
        } catch (Exception $exception) {
            if(!AppContainer::has('eventFire')){
                return $this->sqlException($exception);
            }
            else{
                $className = lcfirst(class_basename($exception));
                return ExceptionFacade::$className($exception->getMessage());
            }
        }
    }
}
