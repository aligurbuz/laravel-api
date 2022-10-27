<?php

namespace App\Facades\Payment\Gateways\Iyzico;

use App\Facades\Payment\Gateways\GatewayManager;
use Iyzipay\Options;

class Iyzico extends GatewayManager
{
    /**
     * @return Options
     */
    public function options(): Options
    {
        $conf = $this->getConfiguration();

        $options = new Options();
        $options->setApiKey($conf['ApiKey']);
        $options->setSecretKey($conf['SecretKey']);
        $options->setBaseUrl($conf['BaseUrl']);

        return $options;
    }

    /**
     * request data for facade
     *
     * @return Request
     */
    public static function request(): Request
    {
        return new Request((new self())->options());
    }

    /**
     * PaymentCard data for facade
     *
     * @return PaymentCard
     */
    public static function paymentCard(): PaymentCard
    {
        return new PaymentCard();
    }

    /**
     * Buyer data for facade
     *
     * @return Buyer
     */
    public static function buyer(): Buyer
    {
        return new Buyer();
    }

    /**
     * Address data for facade
     *
     * @return Address
     */
    public static function address(): Address
    {
        return new Address();
    }
}
