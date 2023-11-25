<?php
// variable function di php
// contohnya foo dan bar ini.
function foo()
{
    echo "Foo" . PHP_EOL;
}

function bar()
{
    echo "Bar" . PHP_EOL;
}

$varFoo = "foo";
$varFoo();

$varBar = "bar";
$varBar();

// contoh lagi ketika didalam method ada method variable
// seakan akan mengirim function ke dalam argument
function sayHello(String $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFun(String $name): string
{
    return "Sample $name";
}

sayHello("Nurkholis", "sampleFun");
