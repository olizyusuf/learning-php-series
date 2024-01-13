<?php

namespace Data\Level;

trait Customer
{
    public string $name;

    public function greeting(?string $name)
    {
        if (is_null($name)) {
            echo "not found" . PHP_EOL;
        } else {
            echo "Hi, customer $name" . PHP_EOL;
        }
    }
}

trait Seller
{

    public function getStoreName(string $name)
    {
        echo "Store is $name" . PHP_EOL;
    }
}


class Person
{
    use Customer, Seller;
}
