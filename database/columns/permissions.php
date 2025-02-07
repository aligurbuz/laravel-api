<?php return [
    'columns' => ["id", "permission_code", "endpoint", "description", "status", "is_deleted", "created_by", "updated_by", "deleted_by", "deleted_at", "created_at", "updated_at"],
    'indexes' => ["id", "permission_code", "status", "is_deleted"],
    'types' => ["integer", "integer", "string", "string", "integer", "integer", "integer", "integer", "integer", "timestamp", "timestamp", "timestamp"],
    'required_columns' => ["endpoint", "description"],
    'max_length_columns' => ["endpoint", "description"],
    'max_length_values' => ["255", "65535"],
];
