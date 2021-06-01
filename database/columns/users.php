<?php return [
        'columns' => ["id","user_code","name","email","email_verified_at","password","remember_token","created_at","updated_at","USER","CURRENT_CONNECTIONS","TOTAL_CONNECTIONS"],
        'indexes' => ["id","user_code","email","email","password"],
        'types' => ["integer","integer","string","string","timestamp","string","string","timestamp","timestamp","string","integer","integer"],
        'required_columns' => ["user_code","name","email","password"],
        'max_length_columns' => ["name","email","password","remember_token"],
        'max_length_values' => ["255","255","255","100"],
        ];
