<?php

namespace App\Facades\Payment\Gateways\Iyzico;

use App\Exceptions\Exception;
use Iyzipay\Model\Address;
use Iyzipay\Model\Buyer;
use Iyzipay\Model\Payment;
use Iyzipay\Model\PaymentCard;
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
        $this->setBasketId(time());
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
     * set payment card instance for facade
     *
     * @param PaymentCard $paymentCard
     * @return $this
     */
    public function setPaymentCard(PaymentCard $paymentCard): self
    {
        $this->request->setPaymentCard($paymentCard);

        return $this;
    }

    /**
     * set buyer instance for facade
     *
     * @param Buyer $buyer
     * @return $this
     */
    public function setBuyer(Buyer $buyer): self
    {
        $this->request->setBuyer($buyer);

        return $this;
    }

    /**
     * set address instance for facade
     *
     * @param Address $address
     * @return $this
     */
    public function setShippingAddress(Address $address): self
    {
        $this->request->setShippingAddress($address);

        return $this;
    }

    /**
     * set billingAddress instance for facade
     *
     * @param Address $billingAddress
     * @return $this
     */
    public function setBillingAddress(Address $billingAddress): self
    {
        $this->request->setBillingAddress($billingAddress);

        return $this;
    }

    /**
     * set basketItem arrays for facade
     *
     * @param array $basketItems
     * @return $this
     */
    public function setBasketItems(array $basketItems): self
    {
        $this->request->setBasketItems($basketItems);

        return $this;
    }

    /**
     * get create payment request instance for facade
     *
     * @return CreatePaymentRequest
     */
    public function getRequest() : CreatePaymentRequest
    {
        return $this->request;
    }

    /**
     * set payment create for facade
     *
     * @return array
     */
    public function create(): array
    {
        $paymentRequest = Payment::create($this->request, $this->options);

        if($paymentRequest->getStatus()!=='success'){
            Exception::customException($paymentRequest->getErrorMessage());
        }

        return json_decode(Payment::create($this->request, $this->options)->getRawResult(),1);
    }
}
