<?php return [
        'comments' => ["","","endpoint id for dummy data","","",""],
        'columns' => ["id","dummy_code","endpoint_id","created_by","created_at","updated_at"],
        'indexes' => ["id","dummy_code"],
        'types' => ["integer","integer","string","integer","timestamp","timestamp"],
        'required_columns' => ["endpoint_id"],
        'max_length_columns' => ["endpoint_id"],
        'max_length_values' => ["255"],
        'boolean_values' => [],
        'default_keys' => ["dummy_code","created_by"],
        'default_values' => ["0","0"],
        'enum_columns' => [],
        'enum_values' => [],
        ];