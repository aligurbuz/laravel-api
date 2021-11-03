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

    /**
     * get postman ignore data
     *
     * @return array
     */
    public static function ignore() : array
    {
        $ignoreFile = base_path('postman').''.DIRECTORY_SEPARATOR.'PostmanIgnore.json';
        return json_decode(File::get($ignoreFile),true);
    }

    /**
     * get postman collection according to ignore
     *
     * @return array
     */
    public static function getCollectionAccordingToIgnore() : array
    {
        $ignore = static::ignore();
        $collection = static::collection();
        $itemCollection = $collection['item'] ?? [];

        $list = [];

        foreach ($itemCollection as $key => $item){
            if(!in_array($item['name'],$ignore)){
                $list[$key] = $item;
            }
        }

        $collection['item'] = array_values($list);

        return $collection;
    }
}
