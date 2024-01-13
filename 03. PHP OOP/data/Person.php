<?php

// membuat class
class Person
{
    // constant
    const AUTHOR = "pzn belajar php";
    // membuat propertis dan bisa diberi type data
    // bisa dikasih default value
    // tambah tanda tanya ? didepan string agar boleh null
    var string $name;
    var ?string $address = null;
    var string $country = "Indonesia";

    // constructor, jadi wajib di isi ketika mangakses object
    function __construct(string $name, string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    //menambahkan function di class person
    // update this keyword
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is {$this->name}" . PHP_EOL;
        } else {
            echo "Hi, $name my name is {$this->name}" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object person {$this->name} is destroyed" . PHP_EOL;
    }
}
