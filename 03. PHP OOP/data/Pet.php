<?php

// abstract function, cara mengakses pun harus lewat child
// dan wajib ditulis abstract function diturunannya
// agar tidak terjadi error pada turunannnya
namespace data;

abstract class Pet
{
    public string $name;

    abstract function run(): void;
}

class Cat extends Pet{

    public function run(): void{
        echo "Cat {$this->name} has ben run!!" . PHP_EOL;
    }
}

class Dog extends Pet{

    public function run(): void{
        echo "Dog {$this->name} has ben run!!" . PHP_EOL;
    }
}
