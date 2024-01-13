<?php
require_once "data/Person.php";

// const adalah constant dengan ini dengan php 7.4
const APP_VERSION = "1.0.0";
echo APP_VERSION . PHP_EOL;


// mengakses constant yaitu
$author = Person::AUTHOR;
echo $author . PHP_EOL;

$person = new Person("olis", "yusuf");
$person->info();
