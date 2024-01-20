<?php
require_once  __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();

$sql = "INSERT INTO comments (email,comment) VALUES(?,?);";
$statment = $connection->prepare($sql);
$statment->execute(["olis@gmail.com", "halo dunia"]);
$statment->execute(["olis@gmail.com", "halo dunia"]);
$statment->execute(["olis@gmail.com", "halo dunia"]);

// $sql = "INSERT INTO comments (email,comment) VALUES('yusuf@gmail.com','hai dunia');";

// $connection->exec("INSERT INTO comments (email,comment) VALUES('yusuf@gmail.com','hai dunia');");
// $connection->exec("INSERT INTO comments (email,comment) VALUES('yusuf@gmail.com','hai dunia');");
// $connection->exec("INSERT INTO comments (emails,comment) VALUES('yusuf@gmail.com','hai dunia');");

$connection->commit();
// $connection->rollBack();