<?php

trait Shipping
{
    private $shippingCourier;
    private $shippingCost;

    // Setter method for shipping courier
    public function setShippingCourier($courier)
    {
        $this->shippingCourier = $courier;
    }

    //Getter method for shipping courier
    public function getShippingCourier()
    {
        return $this->shippingCourier;
    }

    //Setter method for shipping cost
    public function setShippingCost($cost)
    {
        $this->shippingCost = $cost;
    }

    //Getter method for shipping cost
    public function getShippingCost()
    {
        return $this->shippingCost;
    }
}
