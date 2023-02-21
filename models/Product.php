<?php
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '../../traits/Shipping.php';
class Product
{
    //!Properties or istance variables
    use Shipping;
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
        // Try and catch with exception
        try {
            if ($price < 0) {
                throw new Exception("Prezzo $title non valido: € $price");
            }
            $this->price = $price;
        } catch (Exception $e) {
            echo 'Eccezione: ',  $e->getMessage();
            die();
        }

        $this->categories = $categories;
        $this->type = $type;
    }

    // Function formatted price with euro 
    public function getFormattedPrice()
    {
        return "€ " . number_format($this->price, 2);
    }
}
