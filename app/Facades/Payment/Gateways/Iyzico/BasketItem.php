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
        $this->setItemType();
    }

    /**
     * set id iyzico basketItem for facade
     *
     * @param string $id
     * @return $this
     */
    public function setId(string $id) : self
    {
        $this->basketItem->setId($id);

        return $this;
    }

    /**
     * set name iyzico basketItem for facade
     *
     * @param string $name
     * @return $this
     */
    public function setName(string $name) : self
    {
        $this->basketItem->setName($name);

        return $this;
    }

    /**
     * set category1 iyzico basketItem for facade
     *
     * @param string $category1
     * @return $this
     */
    public function setCategory1(string $category1) : self
    {
        $this->basketItem->setCategory1($category1);

        return $this;
    }

    /**
     * set category2 iyzico basketItem for facade
     *
     * @param string $category2
     * @return $this
     */
    public function setCategory2(string $category2) : self
    {
        $this->basketItem->setCategory2($category2);

        return $this;
    }

    /**
     * set itemType iyzico basketItem for facade
     *
     * @param string $itemType
     * @return $this
     */
    public function setItemType(string $itemType = BasketItemType::PHYSICAL) : self
    {
        $this->basketItem->setItemType($itemType);

        return $this;
    }

    /**
     * set price iyzico basketItem for facade
     *
     * @param float $price
     * @return $this
     */
    public function setPrice(float $price) : self
    {
        $this->basketItem->setPrice($price);

        return $this;
    }

    /**
     * get basketItem instance for facade
     *
     * @return IyzicoBasketItem
     */
    public function getBasketItem() : IyzicoBasketItem
    {
        return $this->basketItem;
    }
}
