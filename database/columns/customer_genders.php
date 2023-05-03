<?php return [
        'comments' => ["","","customer code","customer gender code","",""],
        'columns' => ["id","customer_gender_code","customer_code","gender_code","created_at","updated_at"],
        'indexes' => ["id","customer_gender_code","customer_code","gender_code"],
        'types' => ["integer","integer","integer","integer","timestamp","timestamp"],
        'required_columns' => ["customer_code","gender_code"],
        'max_length_columns' => [],
        'max_length_values' => [],
        'boolean_values' => [],
        'default_keys' => ["customer_gender_code","created_at","updated_at"],
        'default_values' => ["0","NULL","NULL"],
        'enum_columns' => [],
        'enum_values' => [],
        ];