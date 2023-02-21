<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '../../traits/Shipping.php';


class Game extends Product
{
    use Shipping;
    public $material;
    public $color;

    public function __construct($image, $title, $price, Category $categories, $type, $material, $color, $shippingCourier, $shippingCost)
    {
        parent::__construct($image, $title, $price, $categories, $type);
        $this->material = $material;
        $this->color = $color;
        $this->shippingCourier = $shippingCourier;
        $this->shippingCost = $shippingCost;
    }
}
