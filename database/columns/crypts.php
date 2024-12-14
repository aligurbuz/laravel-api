<?php return [
        'comments' => ["","","system api key","authenticate code","client body as array","",""],
        'columns' => ["id","crypt_code","api_key","authenticate","body","created_at","updated_at"],
        'indexes' => ["id","crypt_code"],
        'types' => ["integer","integer","string","integer","array","timestamp","timestamp"],
        'required_columns' => ["api_key","authenticate","body"],
        'max_length_columns' => ["api_key"],
        'max_length_values' => ["255"],
        'boolean_values' => [],
        'default_keys' => ["crypt_code"],
        'default_values' => ["0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];