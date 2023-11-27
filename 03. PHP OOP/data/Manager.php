<?php

class Manager
{
    var string $name;
    var string $title;

    // membuat overriding constructor seperti ini
    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHi(string $name)
    {
        echo "Hi {$this->name},{$this->title} name is $name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    // disini akan overriding construck di parent
    public function __construct(string $name = "")
    {
        // tidak wajib tapi direkomendasikan utnuk memanggil constructor parent.
        parent::__construct($name, "VP");
    }

    // function overriding
    // fungsi ini akan menggantikan fungsi sebelumnya.
    function sayHi(string $name)
    {
        echo "Hi {$this->name},{$this->title} name is $name" . PHP_EOL;
    }
}
