<?php


class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class FrontEndProgrammer extends Programmer
{
}

class BackEndProgrammer extends Programmer
{
}

class Company
{
    public Programmer $programmer;
}

function sayHiProgrammer(Programmer $programmer)
{
    // kita bisa mengecek type data dengan instanceof
    // tipe data yg dikembalikan yaotu tipe boolean, jika benmar true jika salah false
    if ($programmer instanceof BackEndProgrammer) {
        echo "Hi, Programmer {$programmer->name}" . PHP_EOL;
    } else if ($programmer instanceof FrontEndProgrammer) {
        echo "Hi, Front End {$programmer->name}" . PHP_EOL;
    } else if ($programmer instanceof Programmer) {
        echo "Hi, Back End {$programmer->name}" . PHP_EOL;
    }
}
