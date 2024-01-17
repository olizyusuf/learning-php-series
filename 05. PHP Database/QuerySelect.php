<?php
require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$sql = "SELECT id, name, email FROM customers";

$response = $conn->query($sql);

foreach ($response as $row) {
    //var_dump($row);
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "ID: $id , Name: $name, Email: $email" . PHP_EOL;
}

$conn = null;
