<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Support;

use App\Client\Support\Excel\Create\CreateClient;
use App\Facades\Excel\Excel;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Support\Contracts\ExcelRepositoryContract;

class ExcelController extends ApiController
{
    /**
     * create excel data
     *
     * @param CreateClient $client
     * @param ExcelRepositoryContract $excelRepository
     * @return array|object
     */
    public function create(CreateClient $client, ExcelRepositoryContract $excelRepository): array|object
    {
        return $this->transaction(function () use ($client, $excelRepository) {
            $client->handle();

            //The Excel file will be queued.
            Excel::import();

            return [];
        });
    }
}
