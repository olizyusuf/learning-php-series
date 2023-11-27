<?php
// abstract adalah class yg menjadi acuan turunannya
// tidak bisa diakses langsung harus melewati turunannya
// abstract semacam blueprint
// contoh dibawah ini
namespace data;

abstract class Location
{
    public string $name;
}


class City extends Location
{
}

class Province extends Location
{
}
