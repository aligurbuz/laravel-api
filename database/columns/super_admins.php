<?php return [
    'columns' => ["created_at", "created_by", "deleted_at", "deleted_by", "id", "is_deleted", "status", "super_admin_code", "updated_at", "updated_by", "user_code"],
    'indexes' => ["id", "super_admin_code", "user_code", "status", "is_deleted"],
    'types' => ["timestamp", "integer", "timestamp", "integer", "integer", "integer", "integer", "integer", "timestamp", "integer", "integer"],
    'required_columns' => [],
    'max_length_columns' => [],
    'max_length_values' => [],
];
