<?php

namespace Data\one {
    class Car
    {
        function startEngine()
        {
            echo "Start the engine...." . PHP_EOL;
        }
    }
    class Sample
    {
    }
    class Dummy
    {
    }
}


namespace Data\two {
    class Car
    {
        function getColor(string $color)
        {
            echo "warna mobil ini adalah $color" . PHP_EOL;
        }
    }
}
