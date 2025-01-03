<?php return [
        'comments' => ["","","user code","user password value","user password expired_at value","0:active 1:passive","",""],
        'columns' => ["id","user_password_code","user_code","password","expired_at","status","created_at","updated_at"],
        'indexes' => ["id","user_password_code","user_code","status"],
        'types' => ["integer","integer","integer","string","timestamp","integer","timestamp","timestamp"],
        'required_columns' => ["user_code","password","expired_at"],
        'max_length_columns' => ["password"],
        'max_length_values' => ["255"],
        'boolean_values' => ["status"],
        'default_keys' => ["user_password_code","status"],
        'default_values' => ["0","1"],
        'enum_columns' => [],
        'enum_values' => [],
        ];