<?php
require_once __DIR__ . '/GetConnection.php';

$conn = getConnection();

$sql = "INSERT INTO customers(id,name,email) VALUES ('Nur','Nur','Nur@gmail.com');";

$conn->exec($sql);

$conn = null;
