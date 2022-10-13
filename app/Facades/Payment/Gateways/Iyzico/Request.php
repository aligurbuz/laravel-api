<?php

namespace App\Facades\Payment\Gateways\Iyzico;

use Iyzipay\Model\Payment;
use Iyzipay\Options;
use Iyzipay\Request\CreatePaymentRequest;

class Request
{
    /**
     * @var CreatePaymentRequest
     */
    protected CreatePaymentRequest $request;

    /**
     * @var Options
     */
    protected Options $options;

    /**
     * payment request constructor
     */
    public function __construct(Options $options)
    {
        $this->request = new CreatePaymentRequest();
        $this->options = $options;

        $this->setLocale();
        $this->setConversationId();
        $this->setCurrency();
        $this->setInstallment();
        $this->setPaymentChannel();
        $this->setPaymentGroup();
        $this->setPrice();
    }

    /**
     * set locale for facade
     *
     * @param string $localeName
     * @return $this
     */
    public function setLocale(string $localeName = 'TR'): self
    {
        $this->request->{__FUNCTION__}($localeName);

        return $this;
    }

    /**
     * set conversation id for facade
     *
     * @return $this
     */
    public function setConversationId(): self
    {
        $this->request->{__FUNCTION__}(time());

        return $this;
    }

    /**
     * set conversation id for facade
     *
     * @param float $price
     * @param float|null $paidPrice
     * @return $this
     */
    public function setPrice(float $price = 1, ?float $paidPrice = null): self
    {
        $this->request->{__FUNCTION__}($price);
        $this->request->setPaidPrice(($paidPrice ?? $price));

        return $this;
    }

    /**
     * set currency for facade
     *
     * @param string $currency
     * @return $this
     */
    public function setCurrency(string $currency = 'TRY'): self
    {
        $this->request->{__FUNCTION__}($currency);

        return $this;
    }

    /**
     * set installment for facade
     *
     * @param int $installment
     * @return $this
     */
    public function setInstallment(int $installment = 1): self
    {
        $this->request->{__FUNCTION__}($installment);

        return $this;
    }

    /**
     * set basket id for facade
     *
     * @param string $basketId
     * @return $this
     */
    public function setBasketId(string $basketId): self
    {
        $this->request->{__FUNCTION__}($basketId);

        return $this;
    }

    /**
     * set payment channel for facade
     *
     * @param string $paymentChannel
     * @return $this
     */
    public function setPaymentChannel(string $paymentChannel = 'WEB'): self
    {
        $this->request->{__FUNCTION__}($paymentChannel);

        return $this;
    }

    /**
     * set payment channel for facade
     *
     * @param string $paymentGroup
     * @return $this
     */
    public function setPaymentGroup(string $paymentGroup = 'PRODUCT'): self
    {
        $this->request->{__FUNCTION__}($paymentGroup);

        return $this;
    }

    /**
     * set payment create for facade
     *
     * @return Payment
     */
    public function create(): Payment
    {
        return Payment::create($this->request, $this->options);
    }
}
