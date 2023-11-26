<?php

class Product
{

    // ada 3 jenis visibility
    // public, protected, private jika menggunakan var itu termasuk public
    // contoh dibawah

    var string $name;
    protected int $price;
    private string $detail;

    public function __construct(string $name, int $price, string $detail)
    {
        // untuk public bisa diakses didalam class, turunan dan juga diluar class dengan keyword global
        $this->name = $name;
        // untuk protected dalapt diakses dari dalam class dan juga turunannya
        $this->price = $price;
        // untuk private hanya bisa diakses didalam class tersebut sendiri
        $this->detail = $detail;
    }

    //untuk menakses protected dan private dibutuhkan fungsi yg mengembalikan nilai;
    function getPrice(): int
    {
        return $this->price;
    }

    function getDetail(): string
    {
        return $this->detail;
    }
}

class ProductDummy extends Product
{
    function detailInfo()
    {
        echo "nama ini public {$this->name}" . PHP_EOL;
        echo "harga ini adalah protected {$this->price}" . PHP_EOL;
    }
}
