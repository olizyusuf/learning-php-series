<?php
$matches = [];
$result = preg_match_all("/olis|sky/i", "olis sky", $matches);

var_dump($result);
var_dump($matches);

$banWord = preg_replace("/asu|bajingan/i", "**BW**", "dasar asu dan bajingan !");

var_dump($banWord);
