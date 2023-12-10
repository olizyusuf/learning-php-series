<?php

$array = [
    "firstName" => "olis",
    "middleName" => "yu",
    "lastName" => "suf",
];


$object = (object)$array;

var_dump($object);

echo "First name $object->firstName" . PHP_EOL;
