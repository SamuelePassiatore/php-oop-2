<?php
class Product
{
    //!Properties or istance variables
    public $image;
    public $title;
    public $price;
    public $category;
    public $type;

    //!Class constructor
    public function __construct($image, $title, $price, $category, $type)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }
}
