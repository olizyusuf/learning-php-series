<?php

require_once "data/Shape.php";

use Data\{Shape as Sha, Rectangle as Ret};

$shape = new Sha();
// nilai parent adalah 0
$val = $shape->getCorner();
var_dump($val);

$kotak = new Ret();
$value1 = $kotak->getCorner();
$value2 = $kotak->getCornerParent();
// nilai kembali adalah 4
var_dump($value1);
// nila parent kembali adalah 0
var_dump($value2);
