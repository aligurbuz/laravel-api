<?php return [
    'comments' => ["age choosing for customer", "", "", "customer code", "", ""],
    'columns' => ["age", "created_at", "customer_age_code", "customer_code", "id", "updated_at"],
    'indexes' => ["id", "customer_age_code", "customer_code", "age"],
    'types' => ["integer", "timestamp", "integer", "integer", "integer", "timestamp"],
    'required_columns' => ["age", "customer_code"],
    'max_length_columns' => [],
    'max_length_values' => [],
    'boolean_values' => [],
    'default_keys' => ["customer_age_code"],
    'default_values' => ["0"],
    'enum_columns' => [],
    'enum_values' => [],
];
