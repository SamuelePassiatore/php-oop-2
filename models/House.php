<?php
require_once __DIR__ . '/Product.php';

class House extends Product
{
    public $material;
    public $dimensions;

    public function __construct($image, $title, $price, Category $categories, $type, $material, $dimensions)
    {
        parent::__construct($image, $title, $price, $categories, $type);
        $this->material = $material;
        $this->dimensions = $dimensions;
    }
}
