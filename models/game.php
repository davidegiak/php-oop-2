<?php 
class Game extends Product {
    public $material;

    public function __construct($name, $price, $img, Category $category, $material){
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
        $this->material = $material;

    }
}