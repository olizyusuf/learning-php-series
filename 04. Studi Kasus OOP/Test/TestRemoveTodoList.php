<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("olis");
addTodoList("yusuf");
addTodoList("joni");
addTodoList("sky");
addTodoList("sabiru");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(1);

showTodoList();

$result = removeTodoList(2);
var_dump($result);

showTodoList();
