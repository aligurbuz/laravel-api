<?php

namespace App\Facades\Faker;

class Faker
{
    /**
     * generate random letter for faker facade
     *
     * @param int $count
     * @return string
     */
    public static function letter(int $count = 1) : string
    {
        $faker = faker();

        $letters = [];

        for($i=1; $i<=$count; $i++){
            $letters[] = $faker->randomLetter;
        }

        return implode('',$letters);
    }
}
