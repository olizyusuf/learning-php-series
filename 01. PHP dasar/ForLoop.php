<?php
// perulangan for loop
$nilai = 10;
for ($i = 1; $i <= $nilai; $i++) {
    echo "ini adalah loop $i" . PHP_EOL;
}


// alternative syntax
for ($i = 1; $i <= $nilai; $i++) :
    echo "ini alter adalah loop $i" . PHP_EOL;
endfor;
