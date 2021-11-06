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
     */
    public function createEventDispatcher(array $data = []) : void
    {
        $this->createLocalization($data);
        $this->deleteCache();
        $this->addPostQueryDispatcher($data);
    }

    /**
     * add post query dispatcher for repository
     *
     * @param array $data
     * @return void
     */
    public function addPostQueryDispatcher(array $data = []) : void
    {
        foreach ($this->getAddPostQueries() as $key => $cr){
            if(isset($data[$key])){
                $crData = [];

                foreach ($data[$key] as $crKey => $crValues){
                    $crData[$crKey] = $crValues;
                    $crData[$crKey][getTableCode($this->getModel())] = $data[getTableCode($this->getModel())];
                }

                cR($cr,$crData);
                $this->addPostQueryResults[$key] = AppContainer::get('crRepositoryInstance')->create();
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
            foreach ($clientData as $value){
                $list[] = $result = $this->createModel($value);

                if(method_exists($this,'eventFireAfterCreate')){
                    $this->eventFireAfterCreate($result->toArray());
                }

                $this->createEventDispatcher($value);
            }

            return $list;
        }
        catch (Exception $exception){
            return $this->sqlException($exception);
        }
    }
}
