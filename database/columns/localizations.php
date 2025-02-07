<?php return [
    'columns' => ["created_at", "created_by", "deleted_at", "deleted_by", "id", "is_deleted", "language_code", "localization_code", "localized_code", "status", "updated_at", "updated_by", "values"],
    'indexes' => ["id", "language_code", "localized_code", "localization_code", "language_code", "localized_code", "status", "is_deleted"],
    'types' => ["timestamp", "integer", "timestamp", "integer", "integer", "integer", "integer", "integer", "integer", "integer", "timestamp", "integer", "array"],
    'required_columns' => ["language_code", "localized_code", "values"],
    'max_length_columns' => [],
    'max_length_values' => [],
];
