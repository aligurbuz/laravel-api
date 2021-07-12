<?php

declare(strict_types=1);

namespace App\Repositories;

use Exception;
use App\Services\Client;

/**
 * Trait CreateRepository
 * @package App\Repositories
 */
trait CreateRepository
{
    /**
     * get client data for create repository model
     *
     * @param array $data
     * @return array
     */
    public function getClientData(array $data = []) : array
    {
        return count($data) ? $data : Client::data();
    }

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
                $list[] = $this->createModel($value);
                $this->createEventDispatcher($value);
            }

            return $list;
        }
        catch (Exception $exception){
            return $this->sqlException($exception);
        }
    }
}
