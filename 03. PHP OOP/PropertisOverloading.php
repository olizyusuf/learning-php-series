<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name)
    {
        return $this->properties[$name];
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call func $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call static func $name with arguments $join" . PHP_EOL;
    }

    public function sayHello()
    {
        echo "call say hello";
    }
}


$zero = new Zero();

$zero->firstName = "Joni";
$zero->lastName = "Hunter";
// akan dipanggil get walau tdk ada properti firstname
echo $zero->firstName . PHP_EOL;
echo $zero->lastName . PHP_EOL;


Zero::sayHi("Oliz", "Yusuf");
