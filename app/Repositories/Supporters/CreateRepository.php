<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

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
    public function createEventDispatcher(array $data = [],int $clientDataKey = 0) : void
    {
        $this->createLocalization($data);
        $this->deleteCache();
        $this->addPostQueryDispatcher($data,$clientDataKey);
    }

    /**
     * add post query dispatcher for repository
     *
     * @param array $data
     * @param int $clientDataKey
     * @return void
     */
    public function addPostQueryDispatcher(array $data = [],int $clientDataKey = 0) : void
    {
        foreach ($this->getAddPostQueries() as $key => $cr){
            if(isset($data[$key])){
                $crData = [];

                if(!isset($data[$key][0])){
                    $data[$key] = [$data[$key]];
                }

                foreach ($data[$key] as $crKey => $crValues){
                    $crData[$crKey] = $crValues;
                    $crData[$crKey][getTableCode($this->getModel())] = $data[getTableCode($this->getModel())];
                }

                cR($cr,$crData);
                $this->addPostQueryResults[$clientDataKey][$key] = AppContainer::get('crRepositoryInstance')->create();
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
            foreach ($clientData as $clientDataKey => $value){
                $result = $this->createModel($value);
                $arrayResults = $result->toArray();

                if(method_exists($this,'eventFireAfterCreate')){
                    $this->eventFireAfterCreate($arrayResults);
                }

                $this->createEventDispatcher($value,$clientDataKey);

                if(count($this->addPostQueryResults)){
                    $arrayResults = array_merge($arrayResults,$this->addPostQueryResults[$clientDataKey]);
                }

                $list[] = $arrayResults;

            }

            return $list;
        }
        catch (Exception $exception){
            return $this->sqlException($exception);
        }
    }
}
