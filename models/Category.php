<?php
class Category
{
    //!Properties or istance variables
    protected $name;

    //!Class constructor
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
