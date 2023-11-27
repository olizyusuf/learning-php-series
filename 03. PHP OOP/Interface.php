<?php

// pengunaan inteface adalah memanggil child interface tersebut 
// polymopisime
require_once "data/Motorcycle.php";

use \data\Honda;

$motor = new Honda();
$motor->drive();
$speed = $motor->speed();
var_dump($speed);
// ini implementasi hasil dr extend interface lain
$isMaintenance = $motor->isMaintenance();
var_dump($isMaintenance);
