<?php
// banyak functio string bawaan php utk memanipulasi string
// contoh strtoupper dan strtolower
// ada banyak disini akan sedikit saja

$names = ["joni", "rongrong", "bonbon"];

echo join($names) . PHP_EOL;

$fullName = "Nurkholis Yusuf";

$mecah = explode(" ", $fullName);

var_dump($mecah);

var_export(strtoupper($fullName));
