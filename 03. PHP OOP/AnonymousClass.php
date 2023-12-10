<?php

interface HelloWorld
{
    function sayHi(): void;
}

// class biasa
class SampleHelloWorld implements HelloWorld
{
    public function sayHi(): void
    {
        echo "Halo Dunia" . PHP_EOL;
    }
}


// anonymous class
$helloWorld = new class implements HelloWorld
{
    public function sayHi(): void
    {
        echo "Halo Anon dunia" . PHP_EOL;
    }
};

$helloWorld->sayHi();
