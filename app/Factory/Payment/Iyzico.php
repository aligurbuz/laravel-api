<?php

declare(strict_types=1);

namespace App\Factory\Payment;

use App\Facades\Payment\Gateways\Iyzico\Iyzico as IyzicoFacade;
use App\Factory\Payment\Interfaces\PaymentInterface;
use App\Services\Date;

/**
 * Class Iyzico
 * @package App\Factory\Payment
 */
class Iyzico extends PaymentManager implements PaymentInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];

    /**
     * @var array
     */
    protected array $order = [];

    /**
     * CardConnect constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;
        $this->order = $this->binds['order'] ?? [];
    }

    /**
     * @return array
     */
    public function createWithCard(): array
    {
        $iyzicoRequest = IyzicoFacade::request()->setPrice(2);

        $iyzicoPaymentRequest = IyzicoFacade::paymentCard()
            ->setCardHolderName('John Doe')
            ->setCardNumber('4766620000000001')
            ->setExpireYear('2030')
            ->setExpireMonth('12')
            ->setCvc('123')
            ->getPaymentCard();

        $iyzicoBuyerRequest = IyzicoFacade::buyer()
            ->setName('John')
            ->setSurname('Doe')
            ->setId('Id1')
            ->setCity('istanbul')
            ->setCountry('turkey')
            ->setZipCode('123400')
            ->setIp(request()->ip())
            ->setRegistrationAddress('Leonida Goosestep, Divertimento Mah. Bora Sok. No:1')
            ->setRegistrationDate(Date::now()->toDateTimeString())
            ->setLastLoginDate(Date::now()->toDateTimeString())
            ->setEmail('galiant781@gmail.com')
            ->setGsmNumber('905350000000')
            ->setIdentityNumber('74300864791')
            ->getBuyer();

        $iyzicoShippingAddressRequest = IyzicoFacade::address()
            ->setZipCode('123400')
            ->setCountry('turkey')
            ->setCity('istanbul')
            ->setAddress('Leonida Goosestep, Divertimento Mah. Bora Sok. No:1')
            ->setContactName('John Doe')
            ->getAddress();

        $iyzicoBillingAddressRequest = IyzicoFacade::address()
            ->setZipCode('123400')
            ->setCountry('turkey')
            ->setCity('istanbul')
            ->setAddress('Leonida Goosestep, Divertimento Mah. Bora Sok. No:1')
            ->setContactName('John Doe')
            ->getAddress();

        $iyzicoBasketItemRequest[] = IyzicoFacade::basketItem()
            ->setId('Id1')
            ->setName('mac book')
            ->setPrice(2)
            ->setCategory1('computers')
            ->setCategory2('laptops')
            ->getBasketItem();


        return $iyzicoRequest
            ->setPaymentCard($iyzicoPaymentRequest)
            ->setBuyer($iyzicoBuyerRequest)
            ->setShippingAddress($iyzicoShippingAddressRequest)
            ->setBillingAddress($iyzicoBillingAddressRequest)
            ->setBasketItems($iyzicoBasketItemRequest)
            ->create();
    }

    /**
     * @return array
     */
    public function createWithSavedCard(): array
    {
        return [];
    }
}
