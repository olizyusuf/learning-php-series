<?php

//operator penugasan
// $a += $b keterangan yaitu $a = $a + $b;

$a = 10;
$b = 3;

$a += $b;
var_dump($a);

//contoh lagi
$total = 0;

$chicken = 20000;
$tempe = 5000;
$kubis = 3000;

$total += $chicken;
$total += $tempe;
$total += $kubis;

echo 'Total: ';
var_dump($total);
echo 'Pajak: ';
var_dump($total /= 1.11);
