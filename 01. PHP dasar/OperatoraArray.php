<?php
// operator pada array
// bisa menggabungkan kedua array 
// tidak bisa menggabung key yg sama, harus berbeda
$first = [
    "first_name" => "nurkholis",
];
$last = [
    "last_name" => "yusuf",
];

$result = $first + $last;
var_dump($result);
