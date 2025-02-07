<?php return [
    'columns' => ["column_name", "created_at", "created_by", "deleted_at", "deleted_by", "id", "is_deleted", "new_data", "old_data", "status", "table_change_code", "table_name", "updated_at", "updated_by"],
    'indexes' => ["id", "table_change_code", "status", "is_deleted"],
    'types' => ["string", "timestamp", "integer", "timestamp", "integer", "integer", "integer", "string", "string", "integer", "integer", "string", "timestamp", "integer"],
    'required_columns' => ["column_name", "new_data", "old_data", "table_name"],
    'max_length_columns' => ["column_name", "new_data", "old_data", "table_name"],
    'max_length_values' => ["100", "65535", "65535", "100"],
];
