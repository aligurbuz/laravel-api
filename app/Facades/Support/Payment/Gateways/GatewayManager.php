<?php

namespace App\Facades\Support\Payment\Gateways;

abstract class GatewayManager
{
    /**
     * @var array
     */
    protected array $configuration = [];

    /**
     * payment gateway constructor
     */
    public function __construct()
    {
        $this->configuration = $this->setConfiguration();
    }

    /**
     * set payment gateways configuration data
     *
     * @return array
     */
    private function setConfiguration(): array
    {
        return config(lcfirst(class_basename($this)));
    }

    /**
     * get payment gateways configuration data
     *
     * @return array
     */
    protected function getConfiguration(): array
    {
        return $this->configuration;
    }
}
