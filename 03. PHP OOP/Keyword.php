<?php
// ambil objek dari file person.php
require_once "data/Person.php";

// membuat object untuk mengakses object saat ini dimana function itu berada
$olis = new Person("olis", "yusuf");
$olis->name = "olis";
$olis->sayHello("yusuf");

$yusuf = new Person("olis", "yusuf");
$yusuf->name = "yusuf";
$yusuf->sayHello(null);
