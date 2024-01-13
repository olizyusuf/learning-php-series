<?php

namespace Data;

class Shape
{
    function getCorner(): int
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    function getCorner(): int
    {
        return 4;
    }

    function getCornerParent(): int
    {
        // parent digunakan untuk mengakses class parent dan mengakses fungsi yg sama
        // contoh get corner sudah dioverride oleh retacngle tapi ingin mengakses parent.
        return parent::getCorner();
    }
}
