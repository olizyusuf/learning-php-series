<?php

$cities = ["Jogja", "Sleman", "Bantul", "Wonosari", "Wates"];

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// banyak function array di php yang bisa digunakan

$mapFunc = fn (int $val) => $val * 10;

$result = array_map($mapFunc, $data);

$result_1 = array_map(fn (int $val) => $val * 10, $data);

var_dump($result);
var_dump($result_1);

var_dump(rsort($cities));
var_dump($cities);

$person = [
    "first" => "olis",
    "last" => "yusuf",
];

var_dump(array_keys($person));
var_dump(array_values($person));
