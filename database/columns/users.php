<?php return [
        'columns' => ["id","user_code","name","email","email_verified_at","password","remember_token","created_at","updated_at"],
        'indexes' => ["id","user_code","email","email","password"],
        'types' => ["integer","integer","string","string","timestamp","string","string","timestamp","timestamp"],
        'required_columns' => ["user_code","name","email","password"],
        ];
