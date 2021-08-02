<?php

declare(strict_types=1);

namespace App\Repositories;

use Exception;

/**
 * Trait CreateRepository
 * @package App\Repositories
 */
trait CreateRepository
{
    /**
     * get create event dispatcher for repository
     *
     * @param array $data
     */
    public function createEventDispatcher(array $data = []) : void
    {
        $this->createLocalization($data);
        $this->deleteCache();
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

        try {
            foreach ($this->getClientData($data) as $value){
                $list[] = $result = $this->createModel($value);

                if(method_exists($this,'eventFireCreate')){
                    $this->eventFireCreate($result->toArray());
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
