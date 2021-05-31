<?php return [
        'columns' => ["id","iso","name","default_name","iso3","num_code","phone_code","created_at","updated_at"],
        'indexes' => ["id"],
        'types' => ["integer","string","string","string","string","integer","integer","timestamp","timestamp"],
        'required_columns' => ["iso","name","default_name","phone_code"],
        ];