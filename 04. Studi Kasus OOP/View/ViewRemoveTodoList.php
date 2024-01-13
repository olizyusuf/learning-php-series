<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomer (x untuk batal)");

    if ($pilihan != "x") {
        $success = removeTodoList($pilihan);
        if ($success) {
            echo "Sukses menghapus todo nomer $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomer $pilihan" . PHP_EOL;
        }
    } else {
        echo "Batal menghapus todo" . PHP_EOL;
    }
}
