<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\File;

class Postman
{
    /**
     * get postman collection data
     *
     * @return array
     */
    public static function collection() : array
    {
        $postmanJsonFile = base_path('postman').''.DIRECTORY_SEPARATOR.''.config('app.name').'.postman_collection.json';
        return json_decode(File::get($postmanJsonFile),true);
    }

    /**
     * get postman environment data
     *
     * @return array
     */
    public static function environment() : array
    {
        $headerJsonFile = app_path('Docs').''.DIRECTORY_SEPARATOR.'header.json';
        return json_decode(File::get($headerJsonFile),true);
    }
}
