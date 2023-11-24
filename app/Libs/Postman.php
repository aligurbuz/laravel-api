<?php

declare(strict_types=1);

namespace App\Libs;

use Illuminate\Support\Facades\File;

class Postman
{
    /**
     * get postman environment data
     *
     * @return array
     */
    public static function environment(): array
    {
        $headerJsonFile = app_path('Docs') . '' . DIRECTORY_SEPARATOR . 'header.json';
        return json_decode(File::get($headerJsonFile), true);
    }

    /**
     * get postman collection according to ignore
     *
     * @return array
     */
    public static function getCollectionAccordingToIgnore(): array
    {
        $ignore = config('documentation.ignores');
        $collection = static::collection();
        $itemCollection = $collection['item'] ?? [];

        $list = [];

        foreach ($itemCollection as $key => $item) {
            if (!in_array($item['name'], $ignore)) {
                $list[$key] = $item;
            }
        }

        $collection['item'] = array_values($list);

        return $collection;
    }

    /**
     * get postman collection data
     *
     * @return array
     */
    public static function collection(): array
    {
        $postmanJsonFile = base_path('postman') . '' . DIRECTORY_SEPARATOR . '' . config('app.name') . '.postman_collection.json';
        return json_decode(File::get($postmanJsonFile), true);
    }
}
