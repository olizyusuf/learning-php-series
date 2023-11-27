<?php
require_once "data/Manager.php";

$olis = new Manager();
$olis->name = "olis";
$olis->sayHi("yusuf");

$yusuf = new VicePresident();
$yusuf->name = "yusuf";
$yusuf->sayHi("olis");
