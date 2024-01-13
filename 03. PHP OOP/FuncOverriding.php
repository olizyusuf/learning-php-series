<?php

require_once "data/Manager.php";

// class parent
$manager = new Manager();
$manager->name = "olis";
$manager->sayHi("yusuf");

// class child externd ke parent dan
// function overriding
$vp = new VicePresident();
$vp->name = "yusuf";
$vp->sayHi("olis");
