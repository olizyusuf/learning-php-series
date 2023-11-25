 <?php
    // global scope tidak bisa digunakan didalam func
    $name = "olis";

    function getName()
    {
        // $name; tidak bisa di akses dari sini
    }

    // global 
    function getSpeed()
    {
        global $speed;
    }


    $speed = 10;

    function getColor(): string
    {
        static $color = 'blue';
        return $color;
    }
