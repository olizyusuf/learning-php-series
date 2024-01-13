<?php
require_once "data/Category.php";

use \data\Category;

$category = new Category();
// untuk set private properti name
$category->setName("olis");
// untuk get private properti name
$name = $category->getName();
var_dump($name);

$category->isEspensive(true);
$expensive = $category->getExpensive();
var_dump($expensive);
