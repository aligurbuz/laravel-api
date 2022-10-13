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
    public function request() : Request
    {
        return new Request($this->options());
    }
}
