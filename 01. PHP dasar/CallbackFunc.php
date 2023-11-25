<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Halo $finalName" . PHP_EOL;
}

sayHello("olis", "strtoupper");
sayHello("OLIS", function (string $name): string {
    return strtolower($name);
});
