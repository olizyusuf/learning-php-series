<?php

class Manager
{
    var string $name;

    function sayHi(string $name)
    {
        echo "Hi {$this->name},my name is $name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
}
