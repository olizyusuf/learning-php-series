<?php

//anonymouse function
$sayHi = function (String $name) {
    echo "Hi $name" . PHP_EOL;
};

$sayHi("olis");

// ini adalah anon biasanya lgsung variable dengan tanpa nama function

// bisa juga sebagai argument

function sayBye(String $name, $filter)
{
    $finalName = $filter($name);
    echo "Bye $finalName" . PHP_EOL;
}

sayBye("Olis", function (string $name): string {
    return strtoupper(($name));
});

// akses dari variable diluar tetapi menggunkan use
// jadi bisa menggunakan variable diluar anonymouse function
// contoh

$firstName = "Sky";
$lastName = "Sabiru";



$sayNameSky = function () use ($firstName, $lastName) {
    echo "Halo $firstName $lastName" . PHP_EOL;
};
// kemudian panggil
$sayNameSky();
