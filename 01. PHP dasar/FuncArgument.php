<?php

// method dengan argument.

function greeting($kondisi)
{
    echo "Selamat $kondisi" . PHP_EOL;
}


greeting("Pagi");
greeting("Siang");

//contoh lagi

function luasPersegi($panjang, $lebar)
{
    $result = $panjang * $lebar;
    echo "$panjang x $lebar = $result" . PHP_EOL;
}

luasPersegi(10, 30);


// default argument
// peletakannya dibelakang sendiri
function sayHello($firstName, $lastName = "anonimous")
{
    echo "Halo $firstName $lastName" . PHP_EOL;
}

sayHello("Nurkholis");


// type declaration
function sum(int $first, int $last)
{
    $total = $first  + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum(10, 10);
sum("100", "90");
sum(true, false);

// variable-length argument list
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }

    echo "Total :" . implode(",", $values) . " = $total" . PHP_EOL;
}

sumAll(1, 2, 3, 4, 5);

// jika sudah terlanjur berbentuk array maka tambahi ... didepan array
$val = [10, 20, 30, 40];
sumAll(...$val);
