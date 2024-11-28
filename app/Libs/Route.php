<?php

namespace App\Libs;

use Illuminate\Support\Str;

class Route
{
    /**
     * @var array|string[]
     */
    protected static array $forbiddenRoutes = [
        'login',
        'logout',
        'user',
        'register',
        'localizations',
        'localizations/language',
        'gate/roles',
        'gate/permissions',
        'countries',
        'countries/cities',
        'countries/districts',
        'currencies',
        'logger'
    ];

    /**
     * @return array
     */
    public static function get(): array
    {
        $routes = collect(\Illuminate\Support\Facades\Route::getRoutes())->map(function ($route) {
            return $route->uri();
        })->toArray();

        $list = [];

        foreach ($routes as $key => $route) {
            if (Str::startsWith($route, 'api/')) {
                $endpoint = str_replace('api/', '', $route);
                if (!in_array($endpoint, $list, true) && !in_array($endpoint, static::$forbiddenRoutes, true)) {
                    $list[] = $endpoint;
                }
            }
        }

        return $list;
    }

}
