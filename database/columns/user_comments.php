<?php return [
        'columns' => ["id","user_id","title","description","comment","counter","created_at","updated_at"],
        'indexes' => ["id","title","user_id"],
        'types' => ["integer","integer","string","string","string","double","timestamp","timestamp"],
        'required_columns' => [],
        ];