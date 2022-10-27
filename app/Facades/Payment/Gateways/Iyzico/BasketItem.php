<?php

namespace App\Facades\Payment\Gateways\Iyzico;

use Iyzipay\Model\BasketItem as IyzicoBasketItem;
use Iyzipay\Model\BasketItemType;

class BasketItem
{
    /**
     * @var IyzicoBasketItem
     */
    protected IyzicoBasketItem $basketItem;

    /**
     * iyzico basketItem constructor
     */
    public function __construct()
    {
        $this->basketItem = new IyzicoBasketItem();
    }

    /**
     * set id iyzico basketItem for facade
     *
     * @param string $id
     * @return void
     */
    public function setId(string $id) : void
    {
        $this->basketItem->setId($id);
    }

    /**
     * set name iyzico basketItem for facade
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name) : void
    {
        $this->basketItem->setName($name);
    }

    /**
     * set category1 iyzico basketItem for facade
     *
     * @param string $category1
     * @return void
     */
    public function setCategory1(string $category1) : void
    {
        $this->basketItem->setCategory1($category1);
    }

    /**
     * set category2 iyzico basketItem for facade
     *
     * @param string $category2
     * @return void
     */
    public function setCategory2(string $category2) : void
    {
        $this->basketItem->setCategory2($category2);
    }

    /**
     * set itemType iyzico basketItem for facade
     *
     * @param string $itemType
     * @return void
     */
    public function setItemType(string $itemType = BasketItemType::PHYSICAL) : void
    {
        $this->basketItem->setItemType($itemType);
    }

    /**
     * set price iyzico basketItem for facade
     *
     * @param float $price
     * @return void
     */
    public function setPrice(float $price) : void
    {
        $this->basketItem->setPrice($price);
    }
}
