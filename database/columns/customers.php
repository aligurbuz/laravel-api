<?php return [
        'comments' => ["","","","","","status:1 - active,status:0 passive","is_deleted:0 - undeleted,is_deleted:1 deleted","","","",""],
        'columns' => ["id","customer_code","name","email","email_verified_at","status","is_deleted","password","remember_token","created_at","updated_at"],
        'indexes' => ["id","customer_code","email","email","password"],
        'types' => ["integer","integer","string","string","timestamp","integer","integer","string","string","timestamp","timestamp"],
        'required_columns' => ["customer_code","name","email","password"],
        'max_length_columns' => ["name","email","password","remember_token"],
        'max_length_values' => ["255","255","255","100"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["status","is_deleted"],
        'default_values' => ["0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];