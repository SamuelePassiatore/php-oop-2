<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '../../traits/Shipping.php';

class House extends Product
{
    use Shipping;
    public $material;
    public $dimensions;

    public function __construct($image, $title, $price, Category $categories, $type, $material, $dimensions, $shippingCourier, $shippingCost)
    {
        parent::__construct($image, $title, $price, $categories, $type);
        $this->material = $material;
        $this->dimensions = $dimensions;
        $this->shippingCourier = $shippingCourier;
        $this->shippingCost = $shippingCost;
    }
}
