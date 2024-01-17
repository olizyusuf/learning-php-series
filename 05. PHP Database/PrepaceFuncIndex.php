<?php
require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// bisa memakai prepare parameter untuk mempermudah agar tdk bisa di sql injection
$username = "olis";
$password = "rahasia";

// bisa menggunakan bindParam dengan index yg mulai dari 1 dst, jadi di querynya memakai ? utk parameternya.
$sql = "SELECT username, password FROM admin WHERE username = ? AND password = ?";
$statment = $conn->prepare($sql);
// selanjutnya kita bindparameter
// $statment->bindParam(1, $username);
// $statment->bindParam(2, $password);
// selanjutnya kita execute;
// $statment->execute();
// jika ingin lebih pendek maka tinggal masukan array ke execute contoh:
$statment->execute([$username, $password]);
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
