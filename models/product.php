<?php 

class Product {
    public $name;
    public $price;
    public $img;

    public function __construct($name, $price, $img){
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;

    }
}

