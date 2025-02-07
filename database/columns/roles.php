<?php return [
    'columns' => ["id", "role_code", "role_app_code", "role_name", "is_administrator", "roles", "status", "is_deleted", "created_by", "updated_by", "deleted_by", "deleted_at", "created_at", "updated_at"],
    'indexes' => ["id", "role_code", "role_app_code", "status", "is_deleted"],
    'types' => ["integer", "integer", "integer", "string", "integer", "array", "integer", "integer", "integer", "integer", "integer", "timestamp", "timestamp", "timestamp"],
    'required_columns' => ["role_name", "roles"],
    'max_length_columns' => ["role_name"],
    'max_length_values' => ["30"],
];
