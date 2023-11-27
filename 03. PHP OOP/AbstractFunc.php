<?php
require_once "data/Pet.php";
// ini cara penggunanan abstract func
use data\{Pet, Cat, Dog};

// object dibuat dan lalu di inisiasi.
$cat = new Cat();
$cat->name = "AbuGosok";
$cat->run();

$dog = new Dog();
$dog->name = "Dogooss";
$dog->run();
