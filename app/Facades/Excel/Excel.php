<?php

namespace App\Facades\Excel;

use App\Services\Client;
use App\Jobs\ExcelImport;

class Excel
{
    /**
     * it imports the Excel file to table
     *
     * @return void
     */
    public static function import() : void
    {
        $clientData = (Client::data())[0] ?? [];

        $file   = request()->file('excel_file')->store('files');
        $model  = $clientData['excel_factory'] ?? null;

        dispatch(new ExcelImport($file,$model));
    }
}
