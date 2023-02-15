<?php

namespace App\Facades\Faker;

use App\Services\Client;
use Exception;

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

    /**
     * generate big integer for faker facade
     *
     * @return int
     *
     * @throws Exception
     */
    public static function bigInteger() : int
    {
        return crc32(Client::fingerPrint() . '_' . time() . '_' . random_int(1, 999999));
    }
}
