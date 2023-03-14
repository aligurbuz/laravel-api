<?php

namespace App\Services\Supporter;

use App\Repositories\EloquentRepository;
use App\Services\Client;
use Illuminate\Support\Str;

class ClientConverter
{
    /**
     * @var EloquentRepository
     */
    private EloquentRepository $eloquentRepository;

    /**
     * @param EloquentRepository $eloquentRepository
     */
    public function __construct(EloquentRepository $eloquentRepository)
    {
        $this->eloquentRepository = $eloquentRepository;
    }

    /**
     * get client convert for changed model
     *
     * @param string $defaultModel
     * @return void
     */
    public function getClientConvertForChangedModel(string $defaultModel): void
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
     * @param mixed $queries
     * @param string $defaultModel
     * @param mixed $client
     * @return array
     */
    private function withClient(mixed $queries, string $defaultModel, mixed $client): array
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
     * @param mixed $client
     * @param mixed $queries
     * @param string $defaultModel
     * @return mixed
     */
    private function filterClient(mixed $client, mixed $queries, string $defaultModel): mixed
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
     * @param mixed $queries
     * @return mixed
     */
    private function hasContainerSource(string $defaultModel, mixed $queries): mixed
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
     * @param mixed $queries
     * @param mixed $client
     * @return array
     */
    private function unsetWithQuery(mixed $queries, mixed $client): array
    {
        if (isset($queries['with'][Str::camel($this->eloquentRepository->getTable())])) {
            unset(
                $queries['with'][Str::camel($this->eloquentRepository->getTable())],
                $client['with'][Str::camel($this->eloquentRepository->getTable())]
            );
        }

        return array($queries, $client);
    }
}
