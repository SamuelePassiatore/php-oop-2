<?php
require_once __DIR__ . '/Category.php';
class Product
{
    //!Properties or istance variables
    public $image;
    public $title;
    private $price;
    public $categories;
    public $type;

    //!Class constructor
    public function __construct($image, $title, $price, Category $categories, $type)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->categories = $categories;
        $this->type = $type;
    }

    // Function formatted price with euro 
    public function getFormattedPrice()
    {
        return "€ " . number_format($this->price, 2);
    }
}
