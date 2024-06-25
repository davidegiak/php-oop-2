<?php 
include __DIR__ . "/models/category.php";
include __DIR__ . "/models/product.php";

$categoryOne = new Category("cane", "blablablabla");
$categoryTwo = new Category("gatto", "blablablablabla");
$product = new Product("cuccia grande", 20, "./cuccia", $categoryOne);
$productOne = new Product("cuccia grande", 20, "./cuccia", $categoryTwo);

