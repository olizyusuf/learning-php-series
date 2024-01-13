<?php
// expression complex

function getAngka(): int
{
    return 100;
}

$value = getAngka();
var_dump($value);

//statment itu adalah kalimat lengkap
// contoh 
$nama = "Nurkholis Yusuf";
echo $nama . PHP_EOL;
$date = new DateTime();
var_dump($date);

// block itu adalah kurung kurawal buka tutup.
function runApp($name)
{
    echo 'halo' . $name;
}
