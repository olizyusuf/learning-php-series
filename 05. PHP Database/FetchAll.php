<?php
require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();
// untuk fetch all untuk mengembalikan nilai contoh dengan select * bla from bla
$sql = "SELECT * FROM customers";
$statment = $conn->query($sql);

$result = $statment->fetchAll();

var_dump($result);

$conn = null;
