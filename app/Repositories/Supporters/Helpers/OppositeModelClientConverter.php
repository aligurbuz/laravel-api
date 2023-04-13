<?php

namespace App\Repositories\Supporters\Helpers;

use App\Repositories\EloquentRepository;
use App\Services\Client;
use Illuminate\Support\Str;

class OppositeModelClientConverter
{
    /**
     * @var EloquentRepository
     */
    private EloquentRepository $eloquentRepository;

    /**
     * @param EloquentRepository $eloquentRepository
     * @param string $defaultModel
     */
    public function __construct(EloquentRepository $eloquentRepository, string $defaultModel)
    {
        $this->eloquentRepository = $eloquentRepository;
        $this->handle($defaultModel);
    }

    /**
     * get client convert for changed model
     *
     * @param string $defaultModel
     * @return void
     */
    private function handle(string $defaultModel): void
    {
        [$request, $queries, $client] = $this->client();

        // since reverse modeling is done,
        // if this reverse model is requested, we unset this value.
        [$queries, $client] = $this->unsetWithQuery($queries, $client);

        // we change the values
        // to be made in relation according to the "source" method.
        [$queries, $client] = $this->withClient($queries, $defaultModel, $client);

        // we change the values
        // to be made in filtering according to the "source" method.
        $queries = $this->filterClient($client, $queries, $defaultModel);

        // we change the values
        // according to the "source" method.
        $queries = $this->hasContainerSource($defaultModel, $queries);

        $request->replace($queries);
    }

    /**
     * get client for client converter
     *
     * @return array
     */
    private function client(): array
    {
        $request = request()->query;
        $queries = $request->all();
        $client = Client::data();

        return array($request, $queries, $client);
    }

    /**
     * we change the values to be made in relation according to the "source" method.
     *
     * @param array $queries
     * @param string $defaultModel
     * @param array $client
     * @return array
     */
    private function withClient(array $queries, string $defaultModel, array $client): array
    {
        $queries['with'][$defaultModel]['select'] = $queries['select'] ?? '*';

        if (isset($client['with'])) {
            $queries['with'][$defaultModel]['with'] = $client['with'];
            foreach ($client['with'] as $clientWithKey => $clientWith) {
                if (isset($queries['with'][$clientWithKey])) {
                    unset($queries['with'][$clientWithKey]);
                }
            }
        }

        return array($queries, $client);
    }

    /**
     * we change the values to be made in filtering according to the "source" method.
     *
     * @param array $client
     * @param array $queries
     * @param string $defaultModel
     * @return array
     */
    private function filterClient(array $client, array $queries, string $defaultModel): array
    {
        if (isset($client['filter'])) {
            $queries['hasFilter'][$defaultModel] = $client['filter'];
            foreach ($client['filter'] as $clientKey => $clientFilter) {
                if (isset($queries['filter'][$clientKey])) {
                    unset($queries['filter'][$clientKey]);
                }
            }
        }

        return $queries;
    }

    /**
     * we change the values according to the "source" method.
     *
     * @param string $defaultModel
     * @param array $queries
     * @return array
     */
    private function hasContainerSource(string $defaultModel, array $queries): array
    {
        if ($this->eloquentRepository->hasContainerSource()) {
            $queries['source'] = $defaultModel;
            if (isset($queries['has'])) {
                $queries['has'] = $defaultModel . ':' . $queries['has'];
            } else {
                $queries['has'] = $defaultModel;
            }
        }

        return $queries;
    }

    /**
     * since reverse modeling is done, if this reverse model is requested, we unset this value.
     *
     * @param array $queries
     * @param array $client
     * @return array
     */
    private function unsetWithQuery(array $queries, array $client): array
    {
        if (isset($queries['with'][Str::camel($this->eloquentRepository->getTable())])) {
            unset(
                $queries['with'][Str::camel($this->eloquentRepository->getTable())],
                $client['with'][Str::camel($this->eloquentRepository->getTable())]
            );

            if(!count($client['with'])){
                unset($client['with']);
            }
        }

        request()->query->replace($client);

        return array($queries, $client);
    }
}
