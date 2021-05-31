<?php return [
        'columns' => ["id","country_code","iso","name","default_name","iso3","num_code","phone_code","created_at","updated_at"],
        'indexes' => ["id","country_code","iso"],
        'types' => ["integer","integer","string","string","string","string","integer","integer","timestamp","timestamp"],
        'required_columns' => ["iso","name","default_name","phone_code"],
        ];