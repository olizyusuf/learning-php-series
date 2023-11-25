<?php

$nilai = "B";

switch ($nilai) {
    case 'A':
        echo "Nilai Sangat baik" . PHP_EOL;
        break;
    case 'B':
        echo "Nilai Biasa" . PHP_EOL;
        break;
    case 'C':
        echo "Nilai Buruk" . PHP_EOL;
        break;
    default:
        echo "Tidak Lulus" . PHP_EOL;
        break;
}

// syntax alternativ

switch ($nilai):
    case 'A':
        echo "Nilai Sangat baik" . PHP_EOL;
        break;
    case 'B':
        echo "Nilai Biasa" . PHP_EOL;
        break;
    case 'C':
        echo "Nilai Buruk" . PHP_EOL;
        break;
    default:
        echo "Tidak Lulus" . PHP_EOL;
        break;
endswitch;
