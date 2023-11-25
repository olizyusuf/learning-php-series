<?php
// memanipulasi string
$name = "Nurkholis Yusuf";

echo "nama: " . $name . PHP_EOL;

// konversi number ke string atau sebaliknya
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"100";
var_dump($valueInt);

// mengakses karakter
echo $name[0] . PHP_EOL;

// variable parsing
$alamat = "Jalan Bantul";

echo "alamatmu adalah $alamat" . PHP_EOL;

// curly brace menggunakan {}
echo "penamabahan {$alamat}sss" . PHP_EOL;

$num = 3;
echo "total: {$num}s";
