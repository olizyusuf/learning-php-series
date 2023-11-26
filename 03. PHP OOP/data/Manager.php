<?php

class Manager
{
    var string $name;

    function sayHi(string $name)
    {
        echo "Hi {$this->name},Manager name is $name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    // function overriding
    // fungsi ini akan menggantikan fungsi sebelumnya.
    function sayHi(string $name)
    {
        echo "Hi {$this->name},VP name is $name" . PHP_EOL;
    }
}
