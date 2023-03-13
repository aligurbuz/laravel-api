<?php

namespace App\Services\Supporter;

use App\Repositories\EloquentRepository;
use App\Services\Client;
use Illuminate\Support\Str;

class ClientConverter
{
    private EloquentRepository $eloquentRepository;

    public function __construct(EloquentRepository $eloquentRepository)
    {
        $this->eloquentRepository = $eloquentRepository;
    }

    /**
     * @param string $defaultModel
     * @return void
     */
    public function getClientConvertForChangedModel(string $defaultModel): void
    {
        $request = request()->query;
        $queries = $request->all();
        $client = Client::data();

        if (isset($queries['with'][Str::camel($this->eloquentRepository->getTable())])) {
            unset($queries['with'][Str::camel($this->eloquentRepository->getTable())], $client['with'][Str::camel($this->eloquentRepository->getTable())]);
        }

        $queries['with'][$defaultModel]['select'] = $queries['select'] ?? '*';

        if (isset($client['with'])) {
            $queries['with'][$defaultModel]['with'] = $client['with'];
            foreach ($client['with'] as $clientWithKey => $clientWith) {
                if (isset($queries['with'][$clientWithKey])) {
                    unset($queries['with'][$clientWithKey]);
                }
            }
        }

        if (isset($client['filter'])) {
            $queries['hasFilter'][$defaultModel] = $client['filter'];
            foreach ($client['filter'] as $clientKey => $clientFilter) {
                if (isset($queries['filter'][$clientKey])) {
                    unset($queries['filter'][$clientKey]);
                }
            }
        }

        if ($this->eloquentRepository->hasContainerSource()) {
            $queries['source'] = $defaultModel;
            if (isset($queries['has'])) {
                $queries['has'] = $defaultModel . ':' . $queries['has'];
            } else {
                $queries['has'] = $defaultModel;
            }
        }

        $request->replace($queries);
    }
}
