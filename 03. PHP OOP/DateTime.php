<?php
$dateTime = new DateTime();
$dateTime->setDate(2020, 1, 1);
$dateTime->setTime(10, 10, 10, 0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMonth = new DateInterval("P1M");
$minusOneMonth->invert = true;
$dateTime->add($minusOneMonth);

var_dump($dateTime);

$now = new DateTime();
var_dump($now);
$now->setTimezone(new DateTimeZone("Asia/Singapore"));
var_dump($now);

$formatTime = $now->format("d-m-Y");
echo "format time $formatTime" . PHP_EOL;

$dateNow = DateTime::createFromFormat("Y-m-d H:i:s", "2020-12-01 10:10:10", new DateTimeZone("Asia/Jakarta"));
if ($dateNow) {
    var_dump($dateNow);
} else {
    echo "format salah" . PHP_EOL;
}
