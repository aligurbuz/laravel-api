<?php return [
        'columns' => ["id","user_code","role_code","name","email","email_verified_at","password","remember_token","created_at","updated_at","username"],
        'indexes' => ["id","user_code","email","email","password"],
        'types' => ["integer","integer","integer","string","string","timestamp","string","string","timestamp","timestamp","string"],
        'required_columns' => ["user_code","name","email","password"],
        'max_length_columns' => ["name","email","password","remember_token","username"],
        'max_length_values' => ["255","255","255","100","255"],
        ];
