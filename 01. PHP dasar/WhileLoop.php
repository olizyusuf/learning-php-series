<?php

// penggunaan while lopp mirip for, tapi
// lebih sederhana 
$counter = 1;

while ($counter <= 10) {
    echo "While loop $counter" . PHP_EOL;
    $counter++;
}

// alternative syntax
while ($counter <= 10) :
    echo "While loop alter syntax $counter" . PHP_EOL;
    $counter++;
endwhile;
