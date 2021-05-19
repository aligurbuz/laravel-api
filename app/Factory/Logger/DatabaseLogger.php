<?php

namespace App\Factory\Logger;

use App\Exceptions\Exception;
use App\Facades\Authenticate\ApiKey;
use App\Models\AccessLogger as Logger;
use App\Factory\Logger\Interfaces\LoggerInterface;
use App\Services\AppContainer;

/**
 * Class Logger
 * @package App\Factory\Logger
 */
class DatabaseLogger extends LoggerManager implements LoggerInterface
{
    /**
     * insert log data into database table
     *
     * @param array $data
     * @param array $responseContent
     * @return object
     */
    public function make(array $data = [],array $responseContent = []) : object
    {
        try {
            return Logger::create([
                'client_key'                => ApiKey::who(),
                'endpoint_name'             => request()->url(),
                'response_code'             => $responseContent['responseCode'] ?? 0,
                'http_method'               => $method = request()->method(),
                'http_client_headers'       => json_encode(request()->header()),
                'http_client_params_data'   => json_encode(request()->query->all()),
                'http_client_body_data'     => ($method!=='GET') ? json_encode(request()->request->all()) : json_encode([]),
                'response_status'           => $responseContent['code'] ?? 0,
                'exception_file'            => $responseContent['file'] ?? '',
                'exception_line'            => $responseContent['line'] ?? '',
                'exception_message'         => $responseContent['errorMessage'] ?? '',
                'exception_trace'           => json_encode(AppContainer::get('debugBackTrace',[])),
                'response'                  => json_encode($responseContent)
            ]);
        }
        catch (\Exception $e){
            return Exception::accessLoggerException($e->getMessage());
        }
    }
}
