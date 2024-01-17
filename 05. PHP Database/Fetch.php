<?php
require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// bisa memakai prepare parameter untuk mempermudah agar tdk bisa di sql injection
$username = "sky";
$password = "red";

$sql = "SELECT username, password FROM admin WHERE username = :username AND password = :password";
$statment = $conn->prepare($sql);
// selanjutnya kita bindparameter
$statment->bindParam("username", $username);
$statment->bindParam("password", $password);
// selanjutnya kita execute;
$statment->execute();
// hasil akan masuk ke statment.

// selanjutnya kita fetch tidak perlu membuat iterasi foreach
if ($row = $statment->fetch()) {
    echo "Login dengan " . $row["username"] . " Sukses" . PHP_EOL;
} else {
    echo "Login gagal.." . PHP_EOL;
}
