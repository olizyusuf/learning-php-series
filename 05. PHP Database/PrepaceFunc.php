<?php
require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// bisa memakai prepare parameter untuk mempermudah agar tdk bisa di sql injection
$username = "admin";
$password = "admin";

$sql = "SELECT username, password FROM admin WHERE username = :username AND password = :password";
$statment = $conn->prepare($sql);
// selanjutnya kita bindparameter
$statment->bindParam("username", $username);
$statment->bindParam("password", $password);
// selanjutnya kita execute;
$statment->execute();
// hasil akan masuk ke statment.

$success = false;
$find_user = null;
foreach ($statment as $row) {
    $success = true;
    $find_user = $row["username"];
}

if ($success) {
    echo "Login dengan $find_user berhasil" . PHP_EOL;
} else {
    echo "Gagal login.." . PHP_EOL;
}
