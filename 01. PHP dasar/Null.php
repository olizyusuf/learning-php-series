<?php

$nama = "Olis";

$nama = NULL;

$umur = NULL;

echo $nama;
var_dump($umur);

$address = NULL;

// mengecek apakah null apa tidak jika null angka 1 dan tidak kosong
echo is_null($address) . PHP_EOL;

$domisili = "Bantul";

echo $domisili . PHP_EOL;

// untuk menghapus variabel

unset($domisili);

$lastName = "Yusuf";
// mengecek aman menggunakan isset() paling aman.
var_dump(isset($lastName));
var_dump(isset($domisili));
