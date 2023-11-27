<?php

namespace data;
// interface juga bisa meng extend interface lain dengan cara extends interface
// contoh
interface isMaintenance
{
    function isMaintenance(): bool;
}

// membuat interface
// juga akan mengimplentasi interface lain
interface Motorcycle extends isMaintenance
{
    function drive(): void;

    function speed(): int;
}

// pengunaan interface menggunakan implements 
// dan method yg ada di interface wajib di gunakan juga seperti dibawah ini,
// jika salah satu tidak ada akan error
class Honda implements Motorcycle
{

    function drive(): void
    {
        echo "Motor has been drive!! brummm" . PHP_EOL;
    }

    function speed(): int
    {
        return 100;
    }

    // dan harus diimplelentasikan semua interface yg terwariskan
    function isMaintenance(): bool
    {
        return true;
    }
}
