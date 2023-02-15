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
    public static function letter(int $count = 1): string
    {
        $faker = faker();

        $letters = [];

        for ($i = 1; $i <= $count; $i++) {
            $letters[] = $faker->randomLetter;
        }

        return implode('', $letters);
    }

    /**
     * generate big integer for faker facade
     *
     * @return int
     *
     * @throws Exception
     */
    public static function bigInteger(): int
    {
        return crc32(Client::fingerPrint() . '_' . time() . '_' . random_int(1, 999999));
    }

    /**
     * generate uuid string for faker facade
     *
     * @return string
     */
    public static function uuid(): string
    {
        return faker()->uuid;
    }

    /**
     * generate username for faker facade
     *
     * @return string
     */
    public static function username(): string
    {
        return faker()->userName;
    }

    /**
     * generate name for faker facade
     *
     * @param string|null $gender
     * @return string
     */
    public static function name(?string $gender = null): string
    {
        return faker()->name($gender);
    }

    /**
     * generate digit number for faker facade
     *
     * @param int $number
     * @return int
     */
    public static function digitNumber(int $number = 6): int
    {
        return faker()->randomNumber($number);
    }

    /**
     * generate password for faker facade
     *
     * @param int $min
     * @param int $max
     * @return string
     */
    public static function password(int $min = 6, int $max = 20): string
    {
        return faker()->password($min, $max);
    }

    /**
     * generate boolean value for faker facade
     *
     * @return bool
     */
    public static function boolean(): bool
    {
        return faker()->boolean;
    }

    /**
     * generate decimal value for faker facade
     *
     * @param int $max
     * @return float
     */
    public static function float(int $max = 9999): float
    {
        return faker()->randomFloat(2,1,$max);
    }
}
