<?php
// operator perbandingan
// contoh

$a = "10";
$b = 10;

// ada tipe jugling akan menkonversi otomatis
$result = $a == $b;
var_dump($result);

$c = 4;
$d = '4';
// ini tipe perbandingan harus identik
$result2 = $c === $d;
var_dump($result2);
