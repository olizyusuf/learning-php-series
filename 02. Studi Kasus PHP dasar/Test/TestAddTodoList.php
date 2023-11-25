<?php

require_once "Model/TodoList.php";
require_once "BusinessLogic/AddTodoList.php";

addTodoList("olis");
addTodoList("yusuf");
addTodoList("sky");

var_dump($todoList);
