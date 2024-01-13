<?php
require_once 'data/Pet.php';

namespace Data;

interface AnimalShelter
{
    function adopt(string $name): Pet;
}

class DogShelter implements AnimalShelter
{
    public function adopt(string $name): Pet
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}

class CatShelter implements AnimalShelter
{
    public function adopt(string $name): Pet
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}
