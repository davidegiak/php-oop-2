<?php 
include __DIR__ . "/models/category.php";
include __DIR__ . "/models/product.php";
include __DIR__ . "/models/food.php";
include __DIR__ . "/models/shelter.php";
include __DIR__ . "/models/game.php";

$dogCategory = new Category("cane", "blablablabla");
$catCategory = new Category("gatto", "blablablablabla");

$product = new Product("guinzaglio", 20, "./img/guinzaglio.jpg", $dogCategory);

$foodProduct = new Food("crocchette", 5.50, "./img/crocchette.jpg", $catCategory, "2Kg");

$shelterProduct = new Shelter("cuccia LUX", 50, "./img/cuccia.jpg", $dogCategory, "XL");

$gameProduct = new Game("pallina", 12, "./img/pallina.png", $catCategory, "spugna");

$products = [
    $product,
    $foodProduct,
    $shelterProduct,
    $gameProduct
];



