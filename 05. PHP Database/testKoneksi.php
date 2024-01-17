<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "databases sukses terkoneksi" . PHP_EOL;

    // tutup koneksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Gagal terkoneksi database : " . $exception->getMessage() . PHP_EOL;
}
