<?php return [
    'columns' => ["id", "language_code", "name", "created_at", "updated_at"],
    'indexes' => ["id", "language_code"],
    'types' => ["integer", "integer", "string", "timestamp", "timestamp"],
    'required_columns' => ["name"],
    'max_length_columns' => ["name"],
    'max_length_values' => ["5"],
];
