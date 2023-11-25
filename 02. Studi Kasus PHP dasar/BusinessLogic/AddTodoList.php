<?php

// menambah todo
function addTodoList(String $todo)
{
    global $todoList;

    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
}
