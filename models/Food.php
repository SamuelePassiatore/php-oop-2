<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '../../traits/Shipping.php';

class Food extends Product
{
    use Shipping;
    public $flavour;
    public $expiration;

    public function __construct($image, $title, $price, Category $categories, $type, $flavour, $expiration, $shippingCourier, $shippingCost)
    {
        parent::__construct($image, $title, $price, $categories, $type);
        $this->flavour = $flavour;
        $this->expiration = $expiration;
        $this->shippingCourier = $shippingCourier;
        $this->shippingCost = $shippingCost;
    }
}
