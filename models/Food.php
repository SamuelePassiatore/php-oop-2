<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    public $flavour;
    public $expiration;

    public function __construct($image, $title, $price, Category $categories, $type, $flavour, $expiration)
    {
        parent::__construct($image, $title, $price, $categories, $type);
        $this->flavour = $flavour;
        $this->expiration = $expiration;
    }
}
