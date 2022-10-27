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
    }

    /**
     * set card hold name for iyzico payment facade
     *
     * @param string $cardHolderName
     * @return void
     */
    public function setCardHolderName(string $cardHolderName): void
    {
        $this->paymentCard->setCardHolderName($cardHolderName);
    }

    /**
     * set card number for iyzico payment facade
     *
     * @param string $cardNumber
     * @return void
     */
    public function setCardNumber(string $cardNumber): void
    {
        $this->paymentCard->setCardNumber($cardNumber);
    }

    /**
     * set expire month for iyzico payment facade
     *
     * @param string $expireMonth
     * @return void
     */
    public function setExpireMonth(string $expireMonth): void
    {
        $this->paymentCard->setExpireMonth($expireMonth);
    }

    /**
     * set expire year for iyzico payment facade
     *
     * @param string $expireYear
     * @return void
     */
    public function setExpireYear(string $expireYear): void
    {
        $this->paymentCard->setExpireYear($expireYear);
    }

    /**
     * set cvc for iyzico payment facade
     *
     * @param int $cvc
     * @return void
     */
    public function setCvc(int $cvc): void
    {
        $this->paymentCard->setCvc($cvc);
    }

    /**
     * set card register for iyzico payment facade
     *
     * @param int $register
     * @return void
     */
    public function setRegisterCard(int $register = 0): void
    {
        $this->paymentCard->setRegisterCard($register);
    }
}
