<?php 
class Food extends Product {
    public $weight;

    public function __construct($name, $price, $img, Category $category, $weight){
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
        $this->weight = $weight;

    }
}