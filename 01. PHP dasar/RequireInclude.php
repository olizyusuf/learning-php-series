<?php
// jika memakai require klo tidak ketemu maka program berhenti dan error
require_once('Function.php');

// untuk menambahkan file diluar tetapi akan teteap berjalan walau tidak ketemul;
include_once('lib/MyFunc.php');


$said = sayHi();

$saiHi = sayHello("olis");
echo $saiHi . PHP_EOL;


// bisa menggunakan require_once / include_once agar hanya sekali mengambil
// sekali saja di load