<?php

namespace App\Libs\Http;

use App\Facades\Database\Authenticate\ApiKey;
use App\Facades\Support\Admin\Authenticate;
use App\Facades\Support\Env\Env;
use Illuminate\Http\Client\ConnectionException;
use JsonException;

class Http
{
    private const HEADER_API_KEY = 'Apikey';

    /**
     * @param string $url
     * @param array $query
     * @param array $headers
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    public static function getStandard(string $url, array $query, array $headers = []): array
    {
        $headers = array_merge($headers,static::defaultHeaders()); // Default to authenticated headers
        $request = \Illuminate\Support\Facades\Http::withHeaders($headers)->get($url,$query);

        return json_decode($request->getBody()->getContents(), 1, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $url
     * @param array $query
     * @param array $headers
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    public static function get(string $url, array $query, array $headers = []): array
    {
        $url = Env::get('INTERNAL_API').'/'.$url;
        $headers = array_merge($headers,static::defaultHeaders()); // Default to authenticated headers
        $request = \Illuminate\Support\Facades\Http::withHeaders($headers)->get($url,$query);

        return json_decode($request->getBody()->getContents(), 1, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $url
     * @param array $data
     * @param array $headers
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    public static function post(string $url, array $data, array $headers = []): array
    {
        $url = Env::get('INTERNAL_API').'/'.$url;
        $headers = array_merge($headers,static::headersWithAuth()); // Default to authenticated headers
        $request = \Illuminate\Support\Facades\Http::withHeaders($headers)->post($url, $data);

        return json_decode($request->getBody()->getContents(), 1, 512, JSON_THROW_ON_ERROR);
    }

    /**
     * @param string $url
     * @param array $data
     * @param array $headers
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    public static function postJson(string $url, array $data, array $headers = []): array
    {
        $url = Env::get('INTERNAL_API').'/'.$url;
        $headers = array_merge($headers,static::defaultHeaders()); // Default to authenticated headers
        $request = \Illuminate\Support\Facades\Http::withHeaders($headers)->post($url, $data);

        return json_decode($request->getBody()->getContents(), 1, 512, JSON_THROW_ON_ERROR);
    }

    public static function headersWithAuth(): array
    {
        return [
            self::HEADER_API_KEY => ApiKey::get('admin')->value,
        ];
    }

    public static function defaultHeaders(): array // Renamed from headersWithoutAuth()
    {
        return [
            self::HEADER_API_KEY => ApiKey::get('admin')->value,
            'Authorization' => 'Bearer '.Authenticate::token(),
            'Accept-Language' => 'en',
        ];
    }
}
