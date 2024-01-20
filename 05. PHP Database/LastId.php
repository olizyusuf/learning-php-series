<?php
require_once  __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "INSERT INTO comments (email,comment) VALUES(?,?);";

$statment = $connection->prepare($sql);
$statment->execute(["olis@gmail.com", "halo dunia"]);

$id = $connection->lastInsertId();

echo $id . PHP_EOL;
