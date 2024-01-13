<?php

$counter = 1;

do {
    echo "ini adalah dowhile ke $counter" . PHP_EOL;
    $counter++;
    if ($counter == 5) continue;
    if ($counter == 9) break;
} while ($counter <= 10);
