<?php

// mengembalikan data dengan return
function sum(int $a, int $b)
{
    $total = $a + $b;
    return $total;
}

$val = sum(10, 20);
echo "jumlah : $val" . PHP_EOL;


function luasPersegi(int $a, int $b)
{
    $luas = $a * $b;
    return $luas;
}

$luasPersegi = luasPersegi(10, 30);
echo "Luas persegei 10 x 30 adalah $luasPersegi" . PHP_EOL;

// pengembalian data berdasarkan dengan yg mana
function cariNilai(int $bobot)
{
    if ($bobot >= 90) {
        return "Baik";
    } else if ($bobot >= 80) {
        return "Lumayan";
    } else {
        return "Jelek";
    }

    echo "upss" . PHP_EOL;
}

$bobotNilai = cariNilai(70);
echo "$bobotNilai" . PHP_EOL;

// return bisa menggunakan type data, bisa int, bool, string 
function sayHello(string $nama): string
{
    $ret = "Hello my name is $nama";
    return $ret;
}

$halo = sayHello("olis");
echo $halo . PHP_EOL;
