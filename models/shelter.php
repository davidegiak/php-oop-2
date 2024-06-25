<?php 
class Shelter extends Product {
    public $size;

    public function __construct($name, $price, $img, Category $category, $size){
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
        $this->size = $size;

    }
}