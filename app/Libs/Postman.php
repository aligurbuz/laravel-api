<?php

declare(strict_types=1);

namespace App\Libs;

use Illuminate\Support\Facades\File;
use JsonException;

class Postman
{
    /**
     * get postman environment data
     *
     * @return array
     * @throws JsonException
     */
    public static function environment(): array
    {
        $headerJsonFile = app_path('Docs') . DIRECTORY_SEPARATOR . 'header.json';

        return json_decode(File::get($headerJsonFile), true, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * get postman collection according to ignore
     *
     * @return array
     * @throws JsonException
     */
    public static function getCollectionAccordingToIgnore(): array
    {
        $ignore = config('documentation.ignores');
        $collection = static::collection();
        $itemCollection = $collection['item'] ?? [];

        $list = array_filter($itemCollection, static function ($item) use ($ignore) {
            return !in_array($item['name'], $ignore, true);
        });

        $collection['item'] = array_values($list);

        return $collection;
    }

    /**
     * get postman collection data
     *
     * @return array
     * @throws JsonException
     */
    public static function collection(): array
    {
        $postmanJsonFile = base_path('postman') . DIRECTORY_SEPARATOR . config('app.name') . '.postman_collection.json';

        return json_decode(File::get($postmanJsonFile), true, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @return array
     * @throws JsonException
     */
    public static function menus(): array
    {
        $lists = static::collection();
        $exclude = ['Auth', 'Support', 'Registration','Global'];

        $menus = [];

        foreach ($lists['item'] as $item) {
            if (isset($item['name']) && !in_array($item['name'], $exclude, true)) {
                $menus[] = $item['name'];
            }
        }

        return $menus;
    }
}
