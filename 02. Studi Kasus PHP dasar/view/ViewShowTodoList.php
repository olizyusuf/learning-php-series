<?php

require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "view/ViewAddTodoList.php";
require_once "view/ViewRemoveTodoList.php";
require_once "Helper/input.php";
require_once "Model/TodoList.php";

function viewShowTodoList()
{
    while (true) {
        echo "" . PHP_EOL;
        showTodoList();

        echo "===========" . PHP_EOL;
        echo "=   Menu  =" . PHP_EOL;
        echo "===========" . PHP_EOL;

        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih");
    }

    echo "Bye bye...." . PHP_EOL;
}
