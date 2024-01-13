<?php

require_once __DIR__ . "/../Helper/input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "Menambah TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo != "x") {
        addTodoList($todo);
    } else {
        echo "Batal tambah todo" . PHP_EOL;
    }
}
