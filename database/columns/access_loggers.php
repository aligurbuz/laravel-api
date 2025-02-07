<?php return [
    'columns' => ["id", "client_key", "endpoint_name", "response_code", "http_method", "http_client_headers", "http_client_params_data", "http_client_body_data", "response_status", "exception_file", "exception_line", "exception_message", "exception_trace", "response", "created_at", "updated_at"],
    'types' => ["integer", "string", "string", "integer", "string", "json", "json", "json", "integer", "string", "string", "string", "json", "json", "timestamp", "timestamp"],
];
