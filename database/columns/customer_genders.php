<?php return [
        'comments' => ["","customer code","","gender choosing for customer","",""],
        'columns' => ["created_at","customer_code","customer_gender_code","gender","id","updated_at"],
        'indexes' => ["id","customer_gender_code","customer_code","gender"],
        'types' => ["timestamp","integer","integer","enum","integer","timestamp"],
        'required_columns' => ["customer_code","gender"],
        'max_length_columns' => ["gender"],
        'max_length_values' => ["6"],
        'boolean_values' => [],
        'default_keys' => ["customer_gender_code"],
        'default_values' => ["0"],
        'enum_columns' => ["gender"],
        'enum_values' => ["male,female"],
        ];