<?php

namespace App\Repositories;

use Exception;
use Illuminate\Support\Facades\Hash;

trait FakerRepository
{
    /**
     * generate big integer for faker repository
     *
     * @return int
     *
     * @throws Exception
     */
    public static function bigIntegerFaker(): int
    {
        return generateHash();
    }

    /**
     * generate random letter for faker facade
     *
     * @param int $count
     * @return string
     */
    public function letterFaker(int $count = 1): string
    {
        $faker = faker();

        $letters = [];

        for ($i = 1; $i <= $count; $i++) {
            $letters[] = $faker->randomLetter;
        }

        return implode('', $letters);
    }

    /**
     * generate uuid string for faker repository
     *
     * @return string
     */
    public function uuidFaker(): string
    {
        return faker()->uuid;
    }

    /**
     * generate username for faker repository
     *
     * @return string
     */
    public function usernameFaker(): string
    {
        return faker()->userName;
    }

    /**
     * generate name for faker repository
     *
     * @param string|null $gender
     * @return string
     */
    public function nameFaker(?string $gender = null): string
    {
        return faker()->name($gender);
    }

    /**
     * generate digit number for faker repository
     *
     * @param int $number
     * @return int
     */
    public function digitNumberFaker(int $number = 6): int
    {
        return faker()->randomNumber($number);
    }

    /**
     * generate password for faker repository
     *
     * @param int $min
     * @param int $max
     * @return string
     */
    public function passwordFaker(int $min = 6, int $max = 20): string
    {
        return Hash::make(faker()->password($min, $max));
    }

    /**
     * generate boolean value for faker repository
     *
     * @return bool
     */
    public function booleanFaker(): bool
    {
        return faker()->boolean;
    }

    /**
     * generate decimal value for faker repository
     *
     * @param int $max
     * @return float
     */
    public function floatFaker(int $max = 9999): float
    {
        return faker()->randomFloat(2, 1, $max);
    }

    /**
     * generate email for faker repository
     *
     * @return string
     */
    public function emailFaker(): string
    {
        return faker()->email;
    }

    /**
     * generate string value for faker repository
     *
     * @return string
     */
    public function stringFaker(): string
    {
        return faker()->name;
    }

    /**
     * generate integer value for faker repository
     *
     * @return string
     */
    public function integerFaker(): string
    {
        return faker()->numerify;
    }
}
