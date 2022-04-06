<?php

namespace App\Facades\Excel;

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
        $file   = request()->file('excel_file')->store('files');
        $model  = client('excel_factory');

        dispatch(new ExcelImport($file,$model));
    }
}
