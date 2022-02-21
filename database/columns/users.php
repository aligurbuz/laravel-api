<?php return [
        'comments' => ["","","","","","","tessssst","","","","","",""],
        'columns' => ["id","user_code","role_code","name","email","email_verified_at","password","remember_token","status","is_deleted","created_at","updated_at","username"],
        'indexes' => ["id","user_code","email","email","password"],
        'types' => ["integer","integer","integer","string","string","timestamp","string","string","integer","integer","timestamp","timestamp","string"],
        'required_columns' => ["user_code","name","email"],
        'max_length_columns' => ["name","email","password","remember_token","username"],
        'max_length_values' => ["255","255","255","100","255"],
        'boolean_values' => ["status","is_deleted"],
        'default_keys' => ["role_code","password","status","is_deleted"],
        'default_values' => ["0","","0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];