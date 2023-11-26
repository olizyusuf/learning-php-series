<?php

require_once "data/Product.php";

$product = new Product("Jeruk", 20000, "rasa jeruk nipis");
$product->name;
// $product->price;
// $product->detail;

//untuk menakses protected dan private dibutuhkan fungsi yg mengembalikan nilai;
$detail = $product->getDetail();
var_dump($detail);

//untuk mengakses protected dan private dibutuhkan fungsi yg mengembalikan nilai;
$productDummy = new ProductDummy("Jeruk", 20000, "rasa jeruk nipis");
$productDummy->detailInfo();
