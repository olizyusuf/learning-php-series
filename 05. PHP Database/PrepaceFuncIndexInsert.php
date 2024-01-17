<?php
require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

// bisa memakai prepare parameter untuk mempermudah agar tdk bisa di sql injection
$username = "sky";
$password = "red";

// bisa menggunakan bindParam dengan index yg mulai dari 1 dst, jadi di querynya memakai ? utk parameternya.
$sql = "INSERT INTO admin (username,password) VALUES(?,?);";
$statment = $conn->prepare($sql);
// selanjutnya kita bindparameter
$statment->bindParam(1, $username);
$statment->bindParam(2, $password);
// selanjutnya kita execute;
$statment->execute();
