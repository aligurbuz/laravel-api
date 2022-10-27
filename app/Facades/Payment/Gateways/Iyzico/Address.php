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
     * @return $this
     */
    public function setContactName(string $contactName): self
    {
        $this->address->setContactName($contactName);

        return $this;
    }

    /**
     * set city iyzico address for facade
     *
     * @param string $city
     * @return $this
     */
    public function setCity(string $city): self
    {
        $this->address->setCity($city);

        return $this;
    }

    /**
     * set country iyzico address for facade
     *
     * @param string $country
     * @return self
     */
    public function setCountry(string $country): self
    {
        $this->address->setCountry($country);

        return $this;
    }

    /**
     * set address iyzico address for facade
     *
     * @param string $address
     * @return $this
     */
    public function setAddress(string $address): self
    {
        $this->address->setAddress($address);

        return $this;
    }

    /**
     * set zipCode iyzico address for facade
     *
     * @param string $zipCode
     * @return $this
     */
    public function setZipCode(string $zipCode): self
    {
        $this->address->setZipCode($zipCode);

        return $this;
    }

    /**
     * get address instance for facade
     *
     * @return IyzicoAddress
     */
    public function getAddress() : IyzicoAddress
    {
        return $this->address;
    }
}
