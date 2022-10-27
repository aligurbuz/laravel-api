<?php

namespace App\Facades\Payment\Gateways\Iyzico;

use Iyzipay\Model\Address as IyzicoAddress;

class Address
{
    /**
     * @var IyzicoAddress
     */
    protected IyzicoAddress $address;

    /**
     * iyzico address constructor
     */
    public function __construct()
    {
        $this->address = new IyzicoAddress();
    }

    /**
     * set contact name iyzico address for facade
     *
     * @param string $contactName
     * @return void
     */
    public function setContactName(string $contactName): void
    {
        $this->address->setContactName($contactName);
    }

    /**
     * set city iyzico address for facade
     *
     * @param string $city
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->address->setCity($city);
    }

    /**
     * set country iyzico address for facade
     *
     * @param string $country
     * @return void
     */
    public function setCountry(string $country): void
    {
        $this->address->setCountry($country);
    }

    /**
     * set address iyzico address for facade
     *
     * @param string $address
     * @return void
     */
    public function setAddress(string $address): void
    {
        $this->address->setAddress($address);
    }

    /**
     * set zipCode iyzico address for facade
     *
     * @param string $zipCode
     * @return void
     */
    public function setZipCode(string $zipCode): void
    {
        $this->address->setZipCode($zipCode);
    }
}
