<?php

namespace App\Facades\Payment\Gateways\Iyzico;

use Iyzipay\Model\PaymentCard as IyzicoPaymentCard;

class PaymentCard
{
    /**
     * @var IyzicoPaymentCard
     */
    protected IyzicoPaymentCard $paymentCard;

    /**
     * iyzico payment constructor
     */
    public function __construct()
    {
        $this->paymentCard = new IyzicoPaymentCard();
        $this->setRegisterCard();
    }

    /**
     * set card hold name for iyzico payment facade
     *
     * @param string $cardHolderName
     * @return $this
     */
    public function setCardHolderName(string $cardHolderName): self
    {
        $this->paymentCard->setCardHolderName($cardHolderName);

        return $this;
    }

    /**
     * set card number for iyzico payment facade
     *
     * @param string $cardNumber
     * @return $this
     */
    public function setCardNumber(string $cardNumber): self
    {
        $this->paymentCard->setCardNumber($cardNumber);

        return $this;
    }

    /**
     * set expire month for iyzico payment facade
     *
     * @param string $expireMonth
     * @return $this
     */
    public function setExpireMonth(string $expireMonth): self
    {
        $this->paymentCard->setExpireMonth($expireMonth);

        return $this;
    }

    /**
     * set expire year for iyzico payment facade
     *
     * @param string $expireYear
     * @return $this
     */
    public function setExpireYear(string $expireYear): self
    {
        $this->paymentCard->setExpireYear($expireYear);

        return $this;
    }

    /**
     * set cvc for iyzico payment facade
     *
     * @param string $cvc
     * @return $this
     */
    public function setCvc(string $cvc): self
    {
        $this->paymentCard->setCvc($cvc);

        return $this;
    }

    /**
     * set card register for iyzico payment facade
     *
     * @param int $register
     * @return $this
     */
    public function setRegisterCard(int $register = 0): self
    {
        $this->paymentCard->setRegisterCard($register);

        return $this;
    }

    /**
     * get payment card instance for facade
     *
     * @return IyzicoPaymentCard
     */
    public function getPaymentCard() : IyzicoPaymentCard
    {
        return $this->paymentCard;
    }
}
