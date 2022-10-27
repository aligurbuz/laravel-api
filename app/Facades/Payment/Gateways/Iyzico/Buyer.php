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
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->buyer->setId($id);

        return $this;
    }

    /**
     * set name iyzico buyer for facade
     *
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->buyer->setName($name);

        return $this;
    }

    /**
     * set surname iyzico buyer for facade
     *
     * @param string $surname
     * @return $this
     */
    public function setSurname(string $surname): self
    {
        $this->buyer->setSurname($surname);

        return $this;
    }

    /**
     * set gsm number iyzico buyer for facade
     *
     * @param string $gsmNumber
     * @return $this
     */
    public function setGsmNumber(string $gsmNumber): self
    {
        $this->buyer->setGsmNumber($gsmNumber);

        return $this;
    }

    /**
     * set email iyzico buyer for facade
     *
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->buyer->setEmail($email);

        return $this;
    }

    /**
     * set identity number iyzico buyer for facade
     *
     * @param string $identityNumber
     * @return $this
     */
    public function setIdentityNumber(string $identityNumber): self
    {
        $this->buyer->setIdentityNumber($identityNumber);

        return $this;
    }

    /**
     * set last login date iyzico buyer for facade
     *
     * @param string $lastLoginDate
     * @return $this
     */
    public function setLastLoginDate(string $lastLoginDate): self
    {
        $this->buyer->setLastLoginDate($lastLoginDate);

        return $this;
    }

    /**
     * set registration date iyzico buyer for facade
     *
     * @param string $registrationDate
     * @return $this
     */
    public function setRegistrationDate(string $registrationDate): self
    {
        $this->buyer->setRegistrationDate($registrationDate);

        return $this;
    }

    /**
     * set registration address iyzico buyer for facade
     *
     * @param string $registrationAddress
     * @return $this
     */
    public function setRegistrationAddress(string $registrationAddress): self
    {
        $this->buyer->setRegistrationAddress($registrationAddress);

        return $this;
    }

    /**
     * set ip address iyzico buyer for facade
     *
     * @param string $ip
     * @return $this
     */
    public function setIp(string $ip): self
    {
        $this->buyer->setIp($ip);

        return $this;
    }

    /**
     * set city iyzico buyer for facade
     *
     * @param string $city
     * @return $this
     */
    public function setCity(string $city): self
    {
        $this->buyer->setCity($city);

        return $this;
    }

    /**
     * set country iyzico buyer for facade
     *
     * @param string $country
     * @return $this
     */
    public function setCountry(string $country): self
    {
        $this->buyer->setCountry($country);

        return $this;
    }

    /**
     * set $zipCode iyzico buyer for facade
     *
     * @param string $zipCode
     * @return $this
     */
    public function setZipCode(string $zipCode): self
    {
        $this->buyer->setZipCode($zipCode);

        return $this;
    }

    /**
     * get buyer instance for facade
     *
     * @return IyzicoBuyer
     */
    public function getBuyer() : IyzicoBuyer
    {
        return $this->buyer;
    }
}
