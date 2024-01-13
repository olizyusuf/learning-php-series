<?php

require_once "data/Car.php";
require_once "data/Helper.php";

$car1 = new \Data\one\Car();
var_dump($car1);
$car1->startEngine();

$car2 = new \Data\two\Car();

echo Helper\APPLICATION . PHP_EOL;
