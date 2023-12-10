<?php

namespace Helper;

class MatHelper
{
    static public string $name = "MatHelper";

    static public function sumAll(int ...$number): int
    {
        $total = 0;

        foreach ($number as $num) {
            $total += $num;
        }

        return $total;
    }
}
