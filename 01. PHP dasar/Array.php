<?php

// tipe data array

$value = array(1, 2, 3, 4, 5);
var_dump($value);

// menampilkan value array
echo "data index 2 yaitu: " . $value[2] . PHP_EOL;

$names = ["olis", "sabiru", "joni"];
var_dump($names);
echo "data index 1 yaitu: " . $names[1] . PHP_EOL;

// mengganti data di array
$value[0] = 10;
echo $value[0] . PHP_EOL;

// menambah data array pada posisi paling belakang
$value[] = 11;
var_dump($value);

// menghapus data di array idenx otomatis hilang dari array
unset($names[0]);
var_dump($names);

// menghitung jumlah data
var_dump(count($names));

// array sebagai map di php
// membuat map di php
$olis = array(
    'id' => 1,
    'full_name' => 'Nurkholis Yusuf',
    'age' => 32,
);



var_dump($olis);
// cara mengambil data pada map
echo $olis['full_name'] . PHP_EOL;

// array didalam array
// contoh disini

$sky = [
    'id' => 2,
    'full_name' => 'Sabiru',
    'age' => 3,
    'address' => [
        'city' => 'Bantul',
        'code_pos' => 55111,
    ]
];

var_dump($sky['address']['city']);
