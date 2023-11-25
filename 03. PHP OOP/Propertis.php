<?php
// ambil objek dari file person.php
require_once "data/Person.php";

// membuat object
$person = new Person("olis", "yusuf");

// set prosertis atau mengakses propertis dengan tanda ->
$person->name = "olis";
$person->address = "Bantul";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;

// membuat object
$person2 = new Person("olis", "yusuf");

// set prosertis atau mengakses propertis
$person2->name = "Yusuf";
// boleh null karena propertis tipe data ditambahi tanda tanya ? 
$person2->address = null;
$person2->country = "Indonesia";

var_dump($person);

echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;
