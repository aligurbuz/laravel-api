<?php return [
        'columns' => ["id","name","email","email_verified_at","password","remember_token","created_at","updated_at","username","USER","CURRENT_CONNECTIONS","TOTAL_CONNECTIONS"],
        'indexes' => ["id","email"],
        'types' => ["integer","string","string","timestamp","string","string","timestamp","timestamp","string","string","integer","integer"],
        'required_columns' => ["name","email","password","CURRENT_CONNECTIONS","TOTAL_CONNECTIONS"],
        ];