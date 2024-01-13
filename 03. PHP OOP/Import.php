<?php

require_once "data/Car.php";
require_once "data/Helper.php";

// bisa menggunakan use untuk menggunakan namespace
// bisa menggunakan alias yaitu menambah as dan bs group dengan {}
use Data\one\{Car as Car1, Dummy as dump, Sample as samp};
use Data\two\Car as Car2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

help();
echo APP . PHP_EOL;

$car1 = new Car1();
$car1->startEngine();

$car2 = new Car2();
$car2->getColor("green");
