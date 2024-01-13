<?php

// arrow function dual hal sama tapi ini tidak perlu use

$firstName = "Nurkholis";
$lastName = "Yusuf";

$sayHiOlis = fn () => "Halo $firstName $lastName" . PHP_EOL;

echo $sayHiOlis();
