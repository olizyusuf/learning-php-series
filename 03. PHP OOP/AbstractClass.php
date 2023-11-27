<?php

require_once "data/Location.php";

use data\{Location, City, Province};

// tidak bisa diakses lagsung karena akan error
// $city = new Location();
// $city->name;

// jadi harus lewat childnya untuk mengakses abstract class
$city = new City();
$city->name = "Bantul";
var_dump($city);

$province = new Province();
$province->name = "Yogyakarta";
var_dump($province);
