<?php
// statment if

$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Anda Lulus" . PHP_EOL;
}

// syntax Else statement
if ($nilai >= 75 && $absen >= 75) {
    echo "Anda Lulus" . PHP_EOL;
} else {
    echo "Anda Tidak Lulus" . PHP_EOL;
}

// syntax Else If statement
$nilai = 45;

if ($nilai >= 75) {
    echo "Nilai Baik" . PHP_EOL;
} else if ($nilai >= 50) {
    echo "Nilai Biasa" . PHP_EOL;
} else {
    echo  "Nilai Buruk" . PHP_EOL;
}


// if menggunakan colon
$speed = 95;

if ($speed >= 100) :
    echo "Over speed" . PHP_EOL;
elseif ($speed >= 80) :
    echo "Speed normal" . PHP_EOL;
else :
    echo "Speed lambat" . PHP_EOL;
endif;
