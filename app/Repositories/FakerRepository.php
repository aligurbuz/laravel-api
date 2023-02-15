<?php

namespace App\Repositories;

trait FakerRepository
{
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
        return faker()->password($min, $max);
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
        return faker()->randomFloat(2,1,$max);
    }
}
