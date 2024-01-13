<?php

// recursive func
// contoh factorial dulu
function factorialLoop(int $val): int
{
    $total = 1;
    for ($i = 1; $i <= $val; $i++) {
        $total *= $i;
    }
    return $total;
}

var_dump(factorialLoop(5));

// contoh recursive factorial
function factorialRecursive(int $val): int
{
    if ($val == 1) {
        return 1;
    } else {
        return $val * factorialRecursive($val - 1);
    }
}

var_dump(factorialRecursive(5));
