<?php

trait Shipping
{
    private $shippingCourier;
    private $shippingCost;

    // Setter method for shipping courier
    public function setShippingCourier($shippingCourier)
    {
        $this->shippingCourier = $shippingCourier;
    }

    //Getter method for shipping courier
    public function getShippingCourier()
    {
        return $this->shippingCourier;
    }

    //Setter method for shipping cost
    public function setShippingCost($shippingCost)
    {
        $this->shippingCost = $shippingCost;
    }

    //Getter method for shipping cost
    public function getShippingCost()
    {
        return $this->shippingCost;
    }
}
