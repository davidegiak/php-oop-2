<?php 
include __DIR__ . "/models/category.php";
include __DIR__ . "/models/product.php";
include __DIR__ . "/models/food.php";

$dogCategory = new Category("cane", "blablablabla");
$catCategory = new Category("gatto", "blablablablabla");

$product = new Product("cuccia grande", 20, "./cuccia", $dogCategory);
$productOne = new Product("cuccia grande", 20, "./cuccia", $catCategory);

$foodProduct = new Food("crocchette", 5.50, "/crocchette.png", $dogCategory, "2Kg");

