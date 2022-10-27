<?php

namespace App\Facades\Payment\Gateways\Iyzico;

use Iyzipay\Model\Buyer as IyzicoBuyer;

class Buyer
{
    /**
     * @var IyzicoBuyer
     */
    protected IyzicoBuyer $buyer;

    /**
     * iyzico buyer constructor
     */
    public function __construct()
    {
        $this->buyer = new IyzicoBuyer();
    }

    /**
     * set id iyzico buyer for facade
     *
     * @param string $id
     * @return void
     */
    public function setId(string $id) : void
    {
        $this->buyer->setId($id);
    }

    /**
     * set name iyzico buyer for facade
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name) : void
    {
        $this->buyer->setName($name);
    }

    /**
     * set surname iyzico buyer for facade
     *
     * @param string $surname
     * @return void
     */
    public function setSurname(string $surname) : void
    {
        $this->buyer->setName($surname);
    }

    /**
     * set gsm number iyzico buyer for facade
     *
     * @param string $gsmNumber
     * @return void
     */
    public function setGsmNumber(string $gsmNumber) : void
    {
        $this->buyer->setGsmNumber($gsmNumber);
    }

    /**
     * set email iyzico buyer for facade
     *
     * @param string $email
     * @return void
     */
    public function setEmail(string $email) : void
    {
        $this->buyer->setEmail($email);
    }

    /**
     * set identity number iyzico buyer for facade
     *
     * @param string $identityNumber
     * @return void
     */
    public function setIdentityNumber(string $identityNumber) : void
    {
        $this->buyer->setIdentityNumber($identityNumber);
    }

    /**
     * set last login date iyzico buyer for facade
     *
     * @param string $lastLoginDate
     * @return void
     */
    public function setLastLoginDate(string $lastLoginDate) : void
    {
        $this->buyer->setLastLoginDate($lastLoginDate);
    }

    /**
     * set registration date iyzico buyer for facade
     *
     * @param string $registrationDate
     * @return void
     */
    public function setRegistrationDate(string $registrationDate) : void
    {
        $this->buyer->setRegistrationDate($registrationDate);
    }

    /**
     * set registration address iyzico buyer for facade
     *
     * @param string $registrationAddress
     * @return void
     */
    public function setRegistrationAddress(string $registrationAddress) : void
    {
        $this->buyer->setRegistrationAddress($registrationAddress);
    }

    /**
     * set ip address iyzico buyer for facade
     *
     * @param string $ip
     * @return void
     */
    public function setIp(string $ip) : void
    {
        $this->buyer->setIp($ip);
    }

    /**
     * set city iyzico buyer for facade
     *
     * @param string $city
     * @return void
     */
    public function setCity(string $city) : void
    {
        $this->buyer->setCity($city);
    }

    /**
     * set country iyzico buyer for facade
     *
     * @param string $country
     * @return void
     */
    public function setCountry(string $country) : void
    {
        $this->buyer->setCountry($country);
    }

    /**
     * set $zipCode iyzico buyer for facade
     *
     * @param string $zipCode
     * @return void
     */
    public function setZipCode(string $zipCode) : void
    {
        $this->buyer->setZipCode($zipCode);
    }
}
