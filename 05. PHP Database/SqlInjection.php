<?php
require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// mengatasi sql injection dengan quote
$username = $conn->quote("admin");
$password = $conn->quote("admin");

$sql = "SELECT username,password FROM admin WHERE username = $username AND password = $password;";

$response = $conn->query($sql);

$success = false;
$find_user = null;
foreach ($response as $row) {
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Login dengan $find_user berhasil" . PHP_EOL;
} else {
    echo "Gagal Login..." . PHP_EOL;
}

$conn = null;
