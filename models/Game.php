<?php
require_once __DIR__ . '/Product.php';

class Game extends Product
{
    public $material;
    public $color;

    public function __construct($image, $title, $price, Category $categories, $type, $material, $color)
    {
        parent::__construct($image, $title, $price, $categories, $type);
        $this->material = $material;
        $this->color = $color;
    }
}
