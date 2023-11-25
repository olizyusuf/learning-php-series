<?php

require_once "Model/TodoList.php";
require_once "view/ViewRemoveTodoList.php";
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";

addTodoList("olis");
addTodoList("yusuf");
addTodoList("joni");
addTodoList("rodi");
addTodoList("junoyo");

showTodoList();

viewRemoveTodoList();

showTodoList();
