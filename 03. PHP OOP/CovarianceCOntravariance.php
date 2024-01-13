<?php
require_once "data/Pet.php";
require_once "data/AnimalShelter.php";

$dogShelter = new \Data\CatShelter();
$dog = $dogShelter->adopt("Bowo");

$catShelter = new \Data\DogShelter();
$cat = $catShelter->adopt("Brain");
